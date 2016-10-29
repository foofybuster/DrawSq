<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function catAbstract()
    {
        $category = "Abstract art";
        $title = $category . " on Drawsquare";
        return view('layout.category', compact('category', 'title'));
    }

    public function catDrawings()
    {
        $category = "Drawings";
        $title = $category . " on Drawsquare";
        return view('layout.category', compact('category', 'title'));
    }

    public function catFanart()
    {
        $category = "Fan art";
        $title = $category . " on Drawsquare";
        return view('layout.category', compact('category', 'title'));
    }

    public function catPaintings()
    {
        $category = "Paintings";
        $title = $category . " on Drawsquare";
        return view('layout.category', compact('category', 'title'));
    }

    public function catSketches()
    {
        $category = "Sketches";
        $title = $category . " on Drawsquare";
        return view('layout.category', compact('category', 'title'));
    }
}
