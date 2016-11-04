<?php

Route::get('/', function () {
    return view('layout.home');
});
Route::get('/category', function () {
    return view('layout.category');
});
Route::get('/single', function () {
    return view('layout.single');
});

Route::get('/profile/{userId?}', function ($userId = null) {
    return view('layout.profile', compact('userId'));
});

Route::post('art-upload', function () {
    $cat = Request::input('category');
    $artName = Request::input('art-name');
    if ($cat == "abstract-art") {
        request()->file('art')->store('arts/abstract-art');
    } elseif ($cat == "drawings") {
        request()->file('art')->store('arts/drawings');
    } elseif ($cat == "fan-art") {
        request()->file('art')->store('arts/fan-art');
    } elseif ($cat == "paintings") {
        request()->file('art')->store('arts/paintings');
    } elseif ($cat == "sketches") {
        request()->file('art')->store('arts/sketches');
    }
    $uploadError = "Uploaded $artName into $cat.";
    return view('layout.upload', compact('uploadError'));
});

Route::get('/abstract-art', 'CatController@catAbstract');
Route::get('/drawings', 'CatController@catDrawings');
Route::get('/fan-art', 'CatController@catFanart');
Route::get('/paintings', 'CatController@catPaintings');
Route::get('/sketches', 'CatController@catSketches');

Auth::routes();

Route::get('/upload', 'HomeController@index');
