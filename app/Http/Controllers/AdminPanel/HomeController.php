<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $productCount = Product::count();
        $userCount = User::count();
        $chatCount = auth()->user()->chats->count();
        $announcementCount = Announcement::count();

        return view('admin.index',[
            'productCount' => $productCount,
            'chatCount' => $chatCount,
            'userCount' => $userCount,
            'announcementCount' => $announcementCount
        ]);
    }
}
