<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});
Route::get('/login', function () {
    return view('login', ['title'=>'Login']);
});
Route::get('/posts', function () {
    return view('posts', ['title'=>'List', 'posts', 'posts'=>Post::all()]);
});
Route::get('/master', function () {
    return view('master', ['title'=>'Master']);
});
Route::get('/proses', function () {
    return view('proses', ['title'=>'Proses']);
});
Route::get('/member', function () {
    return view('member', ['title'=>'Member']);
});

Route::get('posts/{id}', function($id){
        $post = Post::find($id);
        return view ('post', ['title'=> 'Single Post', 'post' =>$post]);
});

use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


