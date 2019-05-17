<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(CategoryRequest $request){
        $categories = new  Category();
        $categories->name = $request->name;
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images', 'public');
            $categories->image = $path;
        }
        $categories->save();
        Session::flash('success', 'Create to complete');
        return redirect()->back();
    }

    public function delete($id){
        $categories = Category::findOrFail($id);
        $categories->books()->delete();
        $categories->delete();
        Session::flash('success', 'Destroy to complete');
        return redirect()->route('category.show');
    }

    public function update($id){
        $category = Category::findOrFail($id);
        return view('categories.update', compact('category'));
    }

    public function edit(CategoryRequest $request, $id){
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images', 'public');
            $category->image = $path;
        }
        $category->save();
        Session::flash('success', 'Update to complete');
        return redirect()->route('category.show');
    }
}
