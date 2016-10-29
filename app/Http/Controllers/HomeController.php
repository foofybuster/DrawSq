<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.home');
    }

    public function catAbstract() {
        $category = "Abstract arts";
        return view('layout.category', compact('category'));
    }

    public function catSketch() {
        $category = "Noob sketches";
        return view('layout.category', compact('category'));
    }

}
