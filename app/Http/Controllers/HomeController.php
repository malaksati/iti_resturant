<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function show_home() {
        return view('index');
    }
    public function show_menu() {
        return view('menu');
    }
    public function show_about() {
        return view('about');
    }
}
