<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $book = new Book();
        $book->book_name = $request->book_name;
        $book->author_name = $request->author_name;
        $book->edition =$request->edition;
        $book->year = $request ->year;
        $book->save();
        return back();
    }

    public function viewall()
    {
        $books = Book::all();
        return view('admin.pages.allbooks', compact('books'));

    }

    public function getbook($id)
    {
        $book=Book::whereId($id)->firstOrFail(); // get() and all() return a collection hence we use first()

        return view('admin.pages.update',compact('book'));
    }

    public function update($id, Request $request)
    {
        $book = Book::whereId($id)->first();// you can also use firstOrFail
        $book->book_name = $request->book_name;
        $book->author_name = $request->author_name;
        $book->edition =$request->edition;
        $book->year = $request ->year;
        $book->save();
        return redirect(url('/allbooks'))->with('status','Details have been successfully updated');
        
    }

    public function borrow($id)
    {
        $book= Book::whereId($id)->first();
        $book->borrowed = 1;
        $book->save();
        return back()->with('status', $book->book_name.' has been borrowed.');
    }



}
