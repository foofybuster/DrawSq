<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
