<?php

namespace App\Http\Controllers;

use App\Book;
use App\Student;
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
        $bbooks=Book::where('borrowed',0)->select(['id','book_name'])->get();
        $students = Student::all();
        $rbooks=Book::where('borrowed',1)->select(['id','book_name'])->get();
        return view('admin.pages.allbooks', compact('books','bbooks','rbooks','students'));

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


}
