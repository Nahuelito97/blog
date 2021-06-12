<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'ASC')->take(10)->get();
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        return view('admin.dashboard.index', compact(['categoryCount', 'postCount', 'posts']));
    }
}
