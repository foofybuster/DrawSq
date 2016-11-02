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

Route::get('/profile/{userId?}', function ($userId = null) {
    return view('layout.profile', compact('userId'));
});

Route::get('/abstract-art', 'CatController@catAbstract');
Route::get('/drawings', 'CatController@catDrawings');
Route::get('/fan-art', 'CatController@catFanart');
Route::get('/paintings', 'CatController@catPaintings');
Route::get('/sketches', 'CatController@catSketches');

Auth::routes();

Route::get('/home', 'HomeController@index');
