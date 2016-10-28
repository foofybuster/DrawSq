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
Route::get('/login', function () {
    return view('layout.login');
});
Route::get('/profile', function () {
    return view('layout.profile');
});
