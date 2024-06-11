<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data = Announcement::where('isPublished', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $productCount = Product::count();
        $chatCount = auth()->user()->chats->count();

        return view('user.index',[
            'data' => $data,
            'productCount' => $productCount,
            'chatCount' => $chatCount
        ]);
    }
}
