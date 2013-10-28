<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>NFQ akademija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/style.css') }}
</head>
<body>
    <div class="container">

        <div class="masthead">
            <h1 class="text-muted">Super galerija</h1>
            @include("menu")
        </div>


        <div class="container">
            @yield("content")
        </div>

    </div> <!-- /container -->
    {{ HTML::script('js/jquery-1.10.2.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
