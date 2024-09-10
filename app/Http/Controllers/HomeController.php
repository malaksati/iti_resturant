<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController
{
    public function show_home() {
        $items = Item::get();
        $tags = Tag::get();
        return view('index', compact('items','tags'));
    }
    public function show_menu() {
        $items = Item::get();
        $tags = Tag::get();
        return view('menu', compact('items','tags'));
    }
    public function show_about() {
        return view('about');
    }
}
