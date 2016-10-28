@extends('layout.main')
@section('header')
    <header>
        <div class="row">
            <div class="top-bar">
                <div class="top-bar-left">
                    <img src="img/logo.svg" class="logo" alt="Drawsquare">
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li>
                            <button type="button" class="button rounded">UPLOAD</button>
                        </li>
                        <li class="hide-for-small-only">Hi, zartre</li>
                        <li><img src="img/loggedin.jpg" class="avatar"></li>
                    </ul>
                </div>
            </div>
            <div class="discover float-center">
                <h1>Discover</h1>
                <button class="button" type="button" data-toggle="discover-cats"><h1>something</h1></button>
                <div class="dropdown-pane" id="discover-cats" data-dropdown data-hover="true" data-hover-pane="true">>
                    <ul class="menu vertical">
                        <li><h2><a href="#">Abstract arts</a></h2></li>
                        <li><h2><a href="#">Abstract arts</a></h2></li>
                        <li><h2><a href="#">Abstract arts</a></h2></li>
                        <li><h2><a href="#">Abstract arts</a></h2></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('home')
    @yield('category')
    @yield('upload')
    @yield('single')
    @yield('profile')
    @yield('login')
@endsection


