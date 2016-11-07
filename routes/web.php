<?php

Route::get('/', function () {
    return view('layout.home');
});
Route::get('category', function () {
    return view('layout.category');
});
Route::get('single', function () {
    return view('layout.single');
});

/** Route::get('profile/{userId?}', function ($userId = null) {
    return view('layout.profile', compact('userId'));
}); */

Route::get('profile', 'ArtController@profileArt');

Route::post('upload', 'ArtController@upload');
Route::get('art/{artId?}', 'ArtController@single');

Route::get('discover/{catUri?}', 'CatController@catSelect');

Auth::routes();

Route::get('upload', 'HomeController@index');
