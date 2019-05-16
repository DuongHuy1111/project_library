<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $categories = new  Category();
        $categories->name = $request->name;
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images', 'public');
            $categories->image = $path;
        }
        $categories->save();
        return redirect()->back();
    }

}
