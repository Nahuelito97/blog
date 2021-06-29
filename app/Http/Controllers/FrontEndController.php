<?php

namespace App\Http\Controllers;

use Session;
use App\Tag;
use App\User;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(Request $request){

        $titulo = $request->get('buscarpor');

        $consulta=Post::select('posts.*');


        $posts = $consulta->where('title', 'like', "%$titulo%")->paginate(6);

        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(5)->get();
        $firstPosts2 = $posts->splice(0, 2);

        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(8);
        return view('website.home', compact(['posts', 'recentPosts', 'firstPosts2']));
    }

    public function about(){
        $user = User::first();

        return view('website.about', compact('user'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        if($category){
            $posts = Post::where('category_id', $category->id)->paginate(9);

            return view('website.category', compact(['category', 'posts']));
        }else {
            return redirect()->route('website');
        }
    }

    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();
        if($tag){
            $posts = $tag->posts()->orderBy('created_at', 'desc')->paginate(4);

            return view('website.tag', compact(['tag', 'posts']));
        }else {
            return redirect()->route('website');
        }
    }



    public function post($slug){
        $post = Post::with('category', 'user')->where('slug', $slug)->first();
        $posts = Post::with('category', 'user')->inRandomOrder()->limit(3)->get();

        // More related posts
        $relatedPosts = Post::orderBy('category_id', 'desc')->inRandomOrder()->take(4)->get();
        $firstRelatedPost = $relatedPosts->splice(0, 1);
        $firstRelatedPosts2 = $relatedPosts->splice(0, 2);
        $lastRelatedPost = $relatedPosts->splice(0, 1);

        $categories = Category::all();
        $tags = Tag::all();

        if($post){
            return view('website.post', compact(['post', 'posts', 'categories', 'tags', 'firstRelatedPost', 'firstRelatedPosts2', 'lastRelatedPost']));
        }else {
            return redirect('/');
        }
    }


}
