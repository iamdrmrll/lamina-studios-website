<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/71d1c9e2bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/users/user-style.css') }}">
    <title>@yield('title') | Lamina Studios</title>
</head>
@yield('body')
    <body class="d-flex flex-column">
        <div class="navbar">
            <a href="/"><img id="lamina-logo" src="{{ asset('img/lamina-logo.png') }}" alt="lamina-logo"></a>
            <ul class="nav">
                <li class="nav-list @yield('active1')"><a href="/" class="nav-link">home</a></li>
                <li class="nav-list @yield('active2')"><a href="/about-us" class="nav-link">about us</a></li>
                <li class="nav-list @yield('active3')"><a href="" class="nav-link">projects</a></li>
                <li class="nav-list @yield('active4')"><a href="" class="nav-link">contact</a></li>
                <li class="nav-list"><span class="material-symbols-outlined color-white">search</span></li>
            </ul>
        </div>
        @yield('content')
    </body>
</html>
