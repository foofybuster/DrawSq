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

@yield('header')

<script src={{ asset("js/vendor/jquery.js") }} type="text/javascript"></script>
<script src={{ asset("js/vendor/what-input.js") }} type="text/javascript"></script>
<script src={{ asset("js/vendor/foundation.min.js") }} type="text/javascript"></script>
<script type="text/javascript">
    $(document).foundation();
</script>
</body>
</html>
