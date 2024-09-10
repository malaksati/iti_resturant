<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class , 'show_home']);

Route::get('/menu', [HomeController::class , 'show_menu']);

Route::get('/about', [HomeController::class , 'show_about']);

Route::get('/book', [BookController::class, 'show_form']);
Route::post('/book/store', [BookController::class, 'store']);

// AUTH
Route::get('/register', [RegisterController::class, "register"]);
Route::post('/register', [RegisterController::class, "handle_register"]);
Route::get('/login', [LoginController::class, "login"]);
Route::post('/login', [LoginController::class, "handle_login"]);
Route::get('/logout', [LogoutController::class, "logout"]);


// Admin
Route::prefix("admin")->group(function () {
    Route::get('/user', [UserController::class,'index']);
    Route::get('/user/add',[UserController::class,'create']);
    Route::post('/user/store',[UserController::class,'store'])->name('userstore');
    Route::get('/user/edit/{id}',[UserController::class,'edit']);
    Route::put('/user/update/{id}',[UserController::class,'update'])->name('userupdate');
    Route::get('/user/delete/{id}',[UserController::class,'destroy']);

    Route::get('/category', [TagController::class,'index']);
    Route::get('/category/add', [TagController::class,'create']);
    Route::post('/category/store',[TagController::class,'store']);
    Route::get('/category/edit/{id}', [TagController::class,'edit'] );
    Route::put('/category/update/{id}',[TagController::class,'update']);
    Route::get('/category/delete/{id}',[TagController::class,'destroy']);

    Route::get('/item', [ItemController::class,'index']);
    Route::get('/item/add',[ItemController::class,'create']);
    Route::post('/item/store',[ItemController::class,'store'])->name('itemstore');
    Route::get('/item/edit/{id}',[ItemController::class,'edit']);
    Route::put('/item/update/{id}',[ItemController::class,'update'])->name('itemupdate');
    Route::get('/item/delete/{id}',[ItemController::class,'destroy']);

    Route::get('/books', [BookController::class, 'show']);
    Route::get('/books/delete/{id}', [BookController::class, 'destroy']);

    Route::get('/login', function () {return view('admin.login');});
    Route::post('/login', [LoginController::class, 'handle_login_admin']);
    Route::post('/register', [RegisterController::class, 'handle_register_admin']);

});

