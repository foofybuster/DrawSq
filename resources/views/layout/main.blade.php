<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title or "Drawsquare" }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f25a81">
    <link rel="stylesheet" href="https://webfonts.fontstand.com/WF-004772-06c214436396e98a7ca60aed2c2b7cfb.css"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/dsq.css") }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset("css/foundation.min.css") }}" type="text/css"/>
</head>
<body>
<header>
    <div class="row">
        <div class="top-bar">
            <div class="top-bar-left">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.svg') }}" class="logo" alt="Drawsquare"/></a>
            </div>
            <div class="top-bar-right">
                <ul class="dropdown menu main-nav" data-dropdown-menu>
                    @if (Auth::guest())
                        <li><a href="{{ url('login') }}" class="white-nav">Login or Register</a></li>
                    @else
                        <li>
                            <a class="button rounded hide-for-small-only" href="{{ url('upload') }}">UPLOAD</a>
                        </li>
                        <li>
                            <a class="white-nav">Hi, {{ Auth::user()->name }}</a>
                            <ul class="menu main-nav-drop">
                                <li class="show-for-small-only"><a class="nav" href="{{ url('upload') }}">Upload</a></li>
                                <li><a href="{{ url('profile/' . Auth::user()->name ) }}" class="nav">Profile</a></li>
                                <li>
                                    <a href="{{ url('logout') }}" class="nav"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li><img src="{{ asset('img/loggedin.jpg') }}" class="avatar hide-for-small-only"></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="discover float-center">
            <h1>Discover</h1>
            <button class="button" type="button" data-toggle="discover-cats">
                <h1>{{ $category or 'something'}}</h1>
            </button>
            <div class="dropdown-pane" id="discover-cats" data-dropdown data-hover="true" data-hover-pane="true">>
                <ul class="menu vertical">
                    <li><h2><a href="{{ url('discover/abstract-art') }}">Abstract art</a></h2></li>
                    <li><h2><a href="{{ url('discover/drawings') }}">Drawings</a></h2></li>
                    <li><h2><a href="{{ url('discover/fan-art') }}">Fan art</a></h2></li>
                    <li><h2><a href="{{ url('discover/paintings') }}">Paintings</a></h2></li>
                    <li><h2><a href="{{ url('discover/sketches') }}">Sketches</a></h2></li>
                </ul>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="row">
        <div class="small-12 medium-6 columns">
            <img src="{{ asset('img/logo.svg') }}" class="footer-logo" alt="Drawsquare"/>
        </div>
        <div class="small-12 medium-6 columns">
            <p>made with ❤︎ and Laravel</p>
        </div>
    </div>
</footer>
<script src={{ asset("js/vendor/jquery.js") }} type="text/javascript"></script>
<script src={{ asset("js/vendor/what-input.js") }} type="text/javascript"></script>
<script src={{ asset("js/vendor/foundation.min.js") }} type="text/javascript"></script>
<script type="text/javascript">
    $(document).foundation();
</script>
</body>
</html>
