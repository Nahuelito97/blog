<?php

namespace App\Http\Controllers;

use App\Tag;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.tag.index', compact('tags'));
    }


    public function create()
    {
        return view('admin.tag.create');
    }


    public function store(StoreRequest $request, Tag $tag)
    {

        $tag->my_store($request);
        Session::flash('success', 'Tag created successfully');

        return redirect()->back();
    }


    public function show(Tag $tag)
    {
    }


    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }


    public function update(UpdateRequest $request, Tag $tag)
    {
        $tag->my_update($request);
        return redirect()->back();
    }


    public function destroy(Tag $tag)
    {
        if ($tag) {
            $tag->delete();

            Session::flash('success', 'Tag deleted successfully');
        }

        return redirect()->back();
    }
}
