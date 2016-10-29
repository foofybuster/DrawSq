<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drawsquare</title>
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
                <a href="/"><img src="img/logo.svg" class="logo" alt="Drawsquare"></a>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login1') }}" class="nav">Login or Register</a></li>
                    @else
                        <li>
                            <button type="button" class="button rounded">UPLOAD</button>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Hi, {{ Auth::user()->name }} <img src="img/loggedin.jpg" class="avatar"> <span
                                        class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" class="nav">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                @endif
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

@yield('content')

<script src={{ asset("js/vendor/jquery.js") }} type="text/javascript"></script>
<script src={{ asset("js/vendor/what-input.js") }} type="text/javascript"></script>
<script src={{ asset("js/vendor/foundation.min.js") }} type="text/javascript"></script>
<script type="text/javascript">
    $(document).foundation();
</script>
</body>
</html>
