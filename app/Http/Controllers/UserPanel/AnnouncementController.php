<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Announcement::where('isPublished', true)
            ->orderBy('published_at', 'desc')
            ->get();

        return view('user.announcement.index',[
            'data' => $data,
            'search' => ""
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement, $id)
    {
        $data= Announcement::find($id);
        return  view('user.announcement.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement, $id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = Announcement::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'LIKE', "%$searchTerm%")
                    ->where('isPublished', true);

        }

        $query->orderBy('published_at', 'desc');

        $data = $query->get();

        return view('user.announcement.index',[
            'data' => $data,
            'search' => $searchTerm
        ]);
    }
}
