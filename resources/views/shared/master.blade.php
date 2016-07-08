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

                @if(Auth::check())
                    <a href="/home">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="message/new">New Message</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="auth/logout">Log Out</a>
                @else
                    <a href="/auth/register">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="/auth/login">Login</a>
                @endif
                <br />

                @if(isset($alert))
                    {{ $alert }}<br />
                @endif
                
                @yield('content')
            </div>
        </div>
    </body>
</html>
