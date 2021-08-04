<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinika chirurgii plastycznej</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/clinic.svg') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand clinic-logo clinic-name" href="{{ route('home') }}">
        <img src="{{ asset('storage/clinic.svg') }}" class="mb-2" alt="">
        <span class="color-span">TwojaUroda</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link hovered text-white" href="{{ route('overtures') }}">Zabiegi
                    <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link hovered text-white" href="{{ route('about') }}">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hovered text-white" href="{{ route('contact') }}">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hovered text-white" href="{{ route('employees') }}">Pracownicy</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link admin" href="{{ route('admin.login') }}">Admin</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link hovered admin-messages" href="{{ route('messages') }}">Wiadomosci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Wyloguj
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<div class="container mt-5">
    @yield('content')
    <div class="footerContainer">
    <div class="footerNav mt-5">
        <ul>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('overtures') }}">Zabiegi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('about') }}">O nas</a>
            </li>
        </ul>
        <ul>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('contact') }}">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('employees') }}">Pracownicy</a>
            </li>
        </ul>
        <ul class="ml-5 media">
            <li class="text-white"> Znajdziesz nas tutaj:
                <br>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>
    <footer class="mt-4">
        <h6 class="text-center footer__h6">&copy; 2021 TwojaUroda - Chirurgia Plastyczna</h6>
    </footer>
    </div>
</div>
<script src="https://kit.fontawesome.com/5e284c1b96.js" crossorigin="anonymous"></script>
@yield('custom js')
</body>
</html>
