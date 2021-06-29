<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function posts(Request $request){
        $term = $request->term;

        $querys = Post::where('title', 'LIKE', '%' . $term . '%')->orderBy('title','ASC')
        ->select('title as label')
        ->get();
        return $querys;
    }
}
