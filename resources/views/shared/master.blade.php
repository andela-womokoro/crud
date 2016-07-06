<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><a href="/">CRUD</a></div>
                @if(isset($alert))
                    {{ $alert }}<br />
                @endif
                
                @yield('content')
            </div>
        </div>
    </body>
</html>
