<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Post;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('blog', function () {
    return view('frontend.blog');
});

Route::get('menu', function () {
    return view('frontend.menu');
});

Route::get('about', function () {
    return view('frontend.about');
});


Route::get('menu/prawn-tagliatelle', function () {
    return view('menus.menu_prawntagliatelle');
});

Route::get('menu/guava', function () {
    return view('menus.menu_guava');
});


// Route::get('/posts/{post}', function (Post $post) {
   // return view('menus.menu_prawntagliatelle', compact('menus.menu_prawntagliatelle'));
// });
