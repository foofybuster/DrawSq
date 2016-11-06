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
    $timestamp = new DateTime();
    $fileName = Auth::user()->id . $timestamp->getTimestamp() . ".jpg";
    if ($cat == "abstract-art") {
        request()->file('art')->storeAs('arts/abstract-art', $fileName);
    } elseif ($cat == "drawings") {
        request()->file('art')->storeAs('arts/drawings', $fileName);
    } elseif ($cat == "fan-art") {
        request()->file('art')->storeAs('arts/fan-art', $fileName);
    } elseif ($cat == "paintings") {
        request()->file('art')->storeAs('arts/paintings', $fileName);
    } elseif ($cat == "sketches") {
        request()->file('art')->storeAs('arts/sketches', $fileName);
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
