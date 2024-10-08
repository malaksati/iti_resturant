<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register() {
        return view("auth.register");
    }
    function handle_register(Request $req) {
        $data = $req->all();
        $data['password']= Hash::make($data['password']);
        User::create($data);
        return redirect('/login');
    }
    function handle_register_admin(Request $req) {
        $data = $req->all();
        $data['password']= Hash::make($data['password']);
        User::create($data);
        return redirect('/admin/login');
    }
}
