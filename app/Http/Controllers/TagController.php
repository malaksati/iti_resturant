<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController
{
    public function index()
    {
        $tags=Tag::get();
        return view('admin.categories',compact('tags'));
    }

    public function create()
    {
        return view('admin.addCategory');
    }

    public function store(Request $request)
    {
        $tag=new Tag();
        $tag->name = $request->name;
        $tag->save();
        return redirect('/admin/category');
    }

    public function edit(string $id)
    {
        $tag=Tag::find($id);
        return view('admin.editCategory',compact('tag'));
    }

    public function update(Request $request, string $id)
    {
        $tag=Tag::find($id);
        $tag->name = $request->name;
        $tag->save();
        return redirect('/admin/category');
    }

    public function destroy(string $id)
    {
        Tag::find($id)->delete();
        return redirect('/admin/category');
    }    
}
