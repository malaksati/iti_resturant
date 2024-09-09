<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items=Item::get();
        
        return view('admin.items',compact('items'));
    }

    public function create()
    {
        $tags = Tag::get();
        return view('admin.addItem', compact('tags'));
    }

    public function store(Request $request)
    {
        $item=new Item();
        $item->title = $request->title;
        $item->date =$request->date;
        $item->license =$request->license;
        $item->price=$request->price;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_item_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $item['image'] = $imgHolder;
        }else {
            $item['image'] = "uploads/default-dish.jpg";
        }
        $item->tag_id = $request->tag_id;
        $item->save();
        return redirect('/admin/item');
    }

    public function edit(string $id)
    {
        $item=Item::find($id);
        $tags = Tag::get();
        return view('admin.editItem',compact('item','tags'));
    }

    public function update(Request $request, string $id)
    {
        $item=Item::find($id);
        $item->title = $request->title;
        $item->date =$request->date;
        $item->license =$request->license;
        $item->price=$request->price;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_item_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $item['image'] = $imgHolder;
        }else {
            $item['image'] = "uploads/default-dish.jpg";
        }
        $item->tag_id = $request->tag_id;
        $item->save();
        return redirect('/admin/item');
    }

    public function destroy(string $id)
    {
        Item::find($id)->delete();
        return redirect('/admin/item');
    }
}
