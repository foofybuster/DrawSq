<?php

Route::get('/', function () {
    return view('layout.home');
});
Route::get('/category', function () {
    return view('layout.category');
});
Route::get('/upload', function () {
    return view('layout.upload');
});
Route::get('/single', function () {
    return view('layout.single');
});
Route::get('/login1', function () {
    return view('layout.login');
});
Route::get('/profile', function () {
    return view('layout.profile');
});

//Route::get('/abstract-arts', 'HomeController@catAbstract');
//Route::get('/sketches', 'HomeController@catSketch');

Route::get('/abstract-arts', function () {
    $category = "Abstract arts";
    $title = $category . " on Drawsquare";
    return view('layout.category', compact('category', 'title'));
});

Route::get('/sketches', function () {
    $category = "Noob sketches";
    $title = $category . " on Drawsquare";
    return view('layout.category', compact('category', 'title'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
