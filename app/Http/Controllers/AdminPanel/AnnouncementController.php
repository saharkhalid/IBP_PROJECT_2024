<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Announcement::orderBy('created_at', 'desc')->get();
        return view('admin.announcement.index',[
            'data' => $data,
            'search' => ""
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Announcement();
        $data->sender()->associate(auth()->user());
        $data->title = $request->title;
        $data->content = $request->textContent;
        $data->save();
        return redirect(route('admin.announcement.show', ['id'=>$data->id]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement, $id)
    {
        $data= Announcement::find($id);
        return  view('admin.announcement.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement, $id)
    {
        $data = Announcement::find($id);
        return view('admin.announcement.edit',[
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement, $id)
    {
        $data = Announcement::find($id);
        $data->title = $request->title;
        $data->content = $request->textContent;
        $data->save();
        return redirect(route('admin.announcement.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement, $id)
    {
        $data= Announcement::find($id);
        $data->delete();
        return redirect(route('admin.announcement.index'));
    }

    public function publish(Announcement $announcement, $id)
    {
        $data = Announcement::find($id);
        $data->isPublished = true;
        $data->published_At = Carbon::now('Europe/Istanbul');
        $data->save();
        return redirect(route('admin.announcement.index'));
    }

    public function search(Request $request)
    {
        $query = Announcement::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'LIKE', "%$searchTerm%");
        }

        $query->orderBy('title', 'asc');

        $data = $query->get();

        return view('admin.announcement.index',[
            'data' => $data,
            'search' => $searchTerm
        ]);
    }
}
