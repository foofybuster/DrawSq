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

Route::post('upload', function () {
    $cat = Request::input('category');
    $artName = Request::input('art-name');
    $artFile = Request::file('art');
    $timestamp = new DateTime();
    if ($cat == "abstract-art") {
        $artFile->storeAs('arts/abstract-art', $fileName);
    } elseif ($cat == "drawings") {
        $artFile->storeAs('arts/drawings', $fileName);
    } elseif ($cat == "fan-art") {
        $artFile->storeAs('arts/fan-art', $fileName);
    } elseif ($cat == "paintings") {
        $artFile->storeAs('arts/paintings', $fileName);
    } elseif ($cat == "sketches") {
        $artFile->storeAs('arts/sketches', $fileName);
    }
    return "Uploaded $artName into $cat as $fileName.";
});

Route::get('/abstract-art', 'CatController@catAbstract');
Route::get('/drawings', 'CatController@catDrawings');
Route::get('/fan-art', 'CatController@catFanart');
Route::get('/paintings', 'CatController@catPaintings');
Route::get('/sketches', 'CatController@catSketches');

Auth::routes();

Route::get('/upload', 'HomeController@index');
