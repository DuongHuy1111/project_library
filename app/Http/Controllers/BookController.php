<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function show(){
        $categories = Category::all();
        $books = Book::all();
        return view('books.list', compact('books', 'categories'));
    }

    public function create(){
        $categories = Category::all();
        $books = Book::all();
        return view('books.create', compact('books', 'categories'));
    }

    public function store(BookRequest $request){
        $categories = Category::all();
        $books = new Book();
        $books->name = $request->name;
        $books->description = $request->description;
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images', 'public');
            $books->image = $path;
        }
        $books->category_id = $request->category_id;
        $books->quantity = $request->totalQty;
        $books->save();
        Session::flash('success', 'Create to complete');
        return redirect()->route('book.store', compact('categories'));
    }

    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();
        Session::flash('success', 'Destroy to complete');
        return redirect()->route('book.show');
    }

    public function update($id){
        $categories = Category::all();
        $book = Book::findOrFail($id);
        return view('books.update', compact('book', 'categories'));
    }

    public function edit(BookRequest $request, $id){
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->description = $request->description;
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images', 'public');
            $book->image = $path;
        }
        $book->category_id = $request->category_id;
        $book->quantity = $request->totalQty;
        $book->save();
        Session::flash('success', 'Update to complete');
        return redirect()->route('book.show');
    }
}
