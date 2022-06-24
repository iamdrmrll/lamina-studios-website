<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/71d1c9e2bd.js" crossorigin="anonymous"></script>
    <title>@yield('document-title')</title>
</head>
<body class="body flex-grow d-flex flex-column">
    <div class="main d-flex flex-grow flex-row">
        <div class="sidebar d-flex flex-column gap-2 bg-black">
            <div class="logo-container d-flex flex-column py-3 align-items-center">
                <a href="/projects" class=""><img src="{{ asset('img/lamina-logo.png') }}" alt="" class="logo border-bottom border-main pb-1"></a>
                <div class="hamburger-container border border-white">
                    <span class="hamburger-lines hamburger-1"></span>
                    <span class="hamburger-lines hamburger-2"></span>
                    <span class="hamburger-lines hamburger-3"></span>
                </div>
            </div>
            <div class="nav-container flex-grow d-flex">
                <ul class="nav d-flex flex-column flex-grow gap-2 w-100">
                    <li class="nav-item"><a href="" class="nav-link @yield('active-1')">dashboard</a></li>
                    <li class="nav-item"><a href="" class="nav-link @yield('active-2')">home</a></li>
                    <li class="nav-item"><span class="nav-link about @yield('active-3')">about<i class="fa-solid fa-caret-left about-dd-icon"></i></span>
                        <ul class="about-dropdown w-100 d-flex flex-column gap-2">
                            <li class="about-item"><a href="" class="about-link @yield('active-7')">talents</a></li>
                            <li class="about-item"><a href="" class="about-link @yield('active-8')">parents</a></li>
                            <li class="about-item"><a href="" class="about-link @yield('active-9')">collaborations</a></li>
                            <li class="about-item"><a href="" class="about-link @yield('active-10')">initiatives</a></li>
                            <li class="about-item"><a href="" class="about-link @yield('active-11')">news & events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ url('/admin/projects/#') }}" class="nav-link @yield('active-4')">projects</a></li>
                    <li class="nav-item"><a href="" class="nav-link @yield('active-5')">settings</a></li>
                    <li class="nav-item"><a href="{{ url('admin/users/#') }}" class="nav-link @yield('active-6')">users</a></li>
                </ul>
            </div>
        </div>
        <div class="section flex-grow d-flex flex-column">
            <div class="top-bar d-flex flex-row py-2 px-3 bg-gray">
                <div class="search-container d-flex flex-row align-items-center gap-1 w-50">
                    <input type="search" class="search-input">
                    <a href="#" class="search-btn bg-black px-1 py-1 "><i class="fa-solid fa-magnifying-glass color-main"></i></a>
                </div>
                <div class="account-container ml-auto">
                    <div class="account-btn d-flex flex-row align-items-center justify-content-center gap-1 color-white">
                        <img class="account-dp" src="https://via.placeholder.com/35x35" alt="">
                        <span class="account-name">admin</span>
                        <i class="fa-solid fa-caret-left account-dd-icon"></i>
                    </div>
                    <ul class="account-dd bg-white d-flex flex-column my-1">
                        <li class="account-li"><a href="" class="account-anchor">Account Settings</a></li>
                        <li class="account-li"><a href="" class="account-anchor">Logout</a></li>
                    </ul>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <div class="footer mt-auto bg-black">
        <hr class="footer-divider my-0">
        <p class="px-3 py-2">&copy; 2022 Lamina Studios, LLC All Rights Reserved.</p>
    </div>

    {{-- modals --}}
    @yield('modals')

    <script type="module" src="{{ asset('js/main.js') }}"></script>
    <script type="module" src="{{ asset('js/sidebar-dropdown.js') }}"></script>
    <script type="module" src="{{ asset('js/account-dd.js') }}"></script>
    <script type="module" src="{{ asset('js/hamburger-btn.js') }}"></script>
    <script type="module" src="{{ asset('js/project-btn-clicked.js') }}"></script>
    <script type="module" src="{{ asset('js/file-input.js') }}"></script>
    <script type="module" src="{{ asset('js/status.js') }}"></script>
    <script type="module" src="{{ asset('js/user.js') }}"></script>
</body>
</html>
