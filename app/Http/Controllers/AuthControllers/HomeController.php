<?php

namespace App\Http\Controllers\AuthControllers;

use App\Http\Controllers\Controller;
use App\Models\BlogTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('Admin.dashboard',compact('user'));
    }

    public function blog()
    {
        $user = Auth::user();
        $allPosts = BlogTableModel::all();
        return view('Admin.Blog.index',compact('user','allPosts'));
    }
}
