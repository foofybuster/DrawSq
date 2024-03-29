<?php

namespace App\Http\Controllers;

use App\Art;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function catSelect($catUri = null)
    {
        if ($catUri == "abstract-art") {
            $category = "Abstract art";
        } elseif ($catUri == "drawings") {
            $category = "Drawings";
        } elseif ($catUri == "fan-art") {
            $category = "Fan art";
        } elseif ($catUri == "paintings") {
            $category = "Paintings";
        } elseif ($catUri == "sketches") {
            $category = "Sketches";
        } else {
            return redirect(url('/'));
        }
        $arts = Art::where('art_cat', $catUri)->simplePaginate(8);
        $title = $category . " on Drawsquare";
        return view('layout.category', compact('title', 'category', 'arts'));
    }
}
