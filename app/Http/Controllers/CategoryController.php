<?php

namespace App\Http\Controllers;

use App\Category;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request, Category $category)
    {
        $category->my_store($request);
        Session::flash('success', 'Categoría creada con exito');

        return redirect()->back();

    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->my_update($request);
        return redirect()->back();
    }

    public function destroy(Category $category)
    {
        $category->delete();

        Session::flash('success', 'Category deleted successfully');

        return redirect()->route('category .index');
    }
}
