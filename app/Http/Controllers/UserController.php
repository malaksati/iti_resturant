<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function index()
    {
         $user=User::get();
        return view('admin.users',compact('user'));
    }

    public function create()
    {
        return view('admin.addUser');
    }

    public function store(Request $request)
    {
        $user=new User();
        $user->name = $request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $pass= Hash::make($request->password);
        $user->password=$pass;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_user_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $user['image'] = $imgHolder;
        }else {
            $user['image'] = "uploads/default-profile.jpg";
        }
        $user->save();
        return redirect('/admin/user');
    }

    public function edit(string $id)
    {
        $user=User::find($id);
        return view('admin.edituser',compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user=User::find($id);
        $user->name = $request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $pass= Hash::make($request->password);
        $user->password=$pass;
        $imgHolder = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . "_user_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $user['image'] = $imgHolder;
        }else {
            $user['image'] = "uploads/default-profile.jpg";
        }
        $user->save();
        return redirect('/admin/user');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect('/admin/user');
    }
}
