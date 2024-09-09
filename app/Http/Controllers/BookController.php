<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController
{
    public function show_form() {
        return view('book');
    }
    public function show() {
        return view('admin.books');
    }
}
