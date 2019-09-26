<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['title'=>'required|unique:categories,title']);
//        $this->validate($request, ['title'=>'required|unique:categories,title']);

        Category::create($request->all());

        return redirect(route('categories.index'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', ['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(['title'=>'required']);

        $category = Category::find($id);
        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
