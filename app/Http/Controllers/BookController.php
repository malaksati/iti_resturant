<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController
{
    public function show_form() {
        return view('book');
    }
    public function show() {
        $books = Book::get();
        return view('admin.books', compact('books'));
    }
    public function store(Request $req) {
        $book = new Book();
        $book->name = $req->name;
        $book->phone = $req->phone;
        $book->email = $req->email;
        $book->total = $req->total;
        $book->date = $req->date;
        $book->user_id = Auth::user()->id;
        $book->save();
        return redirect('/');
    }
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return redirect('/admin/books');
    }
}
