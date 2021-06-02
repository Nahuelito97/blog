<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $categoryCount = Category::all()->count();
        return view('admin.dashboard.index', compact(['categoryCount']));
    }
}
