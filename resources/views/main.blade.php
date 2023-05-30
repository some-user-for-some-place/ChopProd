<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])

        <link rel="shortcut icon" href="{{ asset('public/favicon2.ico') }}">
        <link rel="icon" type="image/png" href="{{ asset('favicon2.png') }}">
        <title> @yield('page_title', 'Главная страница') </title>

    </head>

    <body class="d-flex flex-column min-vh-100 font-monospace" style="background: #f0f0f0 url('{{ asset('/fon2.png') }}'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
        <header class="d-flex justify-content-center flex-wrap justify-content-center py-3 mb-4 border-bottom-0 bg-black">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto ms-5 text-white text-decoration-none">
                <img class="img-fluid ms-5 px-1" src="{{ asset('/logo2.png') }}" alt="This is logo" width="125" height="125">
                <!-- <img class="img-fluid ms-4 px-1" src="{{-- asset('/name.png') --}}" alt="This is logo" width="150" height="150"> -->
                <span class="nav-link ms-4 px-1 fs-1 link-secondary text-white">KRAY</span>
            </a>

            <ul class="nav nav-pills ms-5 px-5 fs-3 d-flex align-items-center">
                <li class="nav-item"><a href="/" class="nav-link link-secondary text-white">Главная</a></li>
                <li class="nav-item"><a href="/services" class="nav-link link-secondary text-white">Услуги</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link link-secondary text-white">Контакты</a></li>
                <li class="nav-item"><a href="/about" class="nav-link link-secondary text-white">О нас</a></li>
            </ul>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="mt-auto">
                <ul class="nav justify-content-center border-bottom-0 pb-3 mb-3">
                    <li class="nav-item"><a href="/" class="nav-link link-primary px-2 text-muted">Главная</a></li>
                    <li class="nav-item"><a href="/services" class="nav-link link-primary px-2 text-muted">Услуги</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link link-primary px-2 text-muted">Контакты</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link link-primary px-2 text-muted">О нас</a></li>
                </ul>
                <p class="text-center font-monospace text-muted">© 2023 OOO «KRAY»</p>
        </footer>
    </body>

    <script>
        const {get} = require("axios");

        function copyText1()
        {
            navigator.clipboard.writeText
            ("№1: +7(153)-482-04-09");
        }

        function copyText2()
        {
            navigator.clipboard.writeText
            ("№2: +7(367)-266-75-29");
        }

        function copyText3()
        {
            navigator.clipboard.writeText
            ("№3: +7(268)-123-28-34");
        }

        function copyText4()
        {
            navigator.clipboard.writeText
            ("№4: +7(682)-986-98-23");
        }

        function copyTextAll()
        {
            navigator.clipboard.writeText
            ("№1: +7(153)-482-04-09; №2: +7(367)-266-75-29; №3: +7(268)-123-28-34; №4: +7(682)-986-98-23");
        }

        function btnClickColor(_this)
        {
            _this.style.backgroundColor = "black";
            _this.style.border = "black";
            setTimeout(() => {  _this.style.backgroundColor = _this.id; _this.style.border = _this.id;}, 100);
        }

    </script>

</html>
