<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatUser;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chat = auth()->user()->chats;
        return view('user.chat.index',[
            'chat' => $chat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $chat = auth()->user()->chats;
        $user = User::all();
        return view('user.chat.create',[
            'chat' => $chat,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $currentUser = auth()->user();
        $id = $request->user_id;

        $existingChat = $currentUser->chats()->whereHas('users', function ($query) use ($id) {
            $query->where('users.id', $id);
        })->first();

        if ($existingChat) {
            return redirect()->route('user.chat.show', [
                'id'=>$existingChat->id
            ]);
        }else{
            $chat = new Chat();
            $chat->save();

            $ChatUser = new ChatUser();
            $ChatUser->user_id = $id;
            $ChatUser->chat_id = $chat->id;
            $ChatUser->save();

            $ChatUser2 = new ChatUser();
            $ChatUser2->user_id = $currentUser->id;
            $ChatUser2->chat_id = $chat->id;
            $ChatUser2->save();
        }

        return redirect()->route('user.chat.show', [
            'id'=>$chat->id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $chat = auth()->user()->chats;
        $data = Chat::find($id);
        $unreadMessages = $data->messages()
            ->where('isRead', false)
            ->where('sender_id', '!=', auth()->id())
            ->get();

        $now = Carbon::now('Europe/Istanbul');
        foreach ($unreadMessages as $message) {
            $message->isRead = true;
            $message->read_at = $now;
            $message->save();
        }

        return view('user.chat.show',[
            'chat' => $chat,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
