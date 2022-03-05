<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

// Chambres
Route::view('/chambres', 'pages.rooms')->name('rooms');

// A propos
Route::view('/apropos', 'pages.about')->name('about');

// Blog
Route::view('/blog', 'blog.blog')->name('blog');
