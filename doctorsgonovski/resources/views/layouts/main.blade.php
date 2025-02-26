<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>

    <title>Doctors Gonovski</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}">

    <!-- Apple Touch Icon (For iPhone and iPad) -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Safari Pinned Tab (For macOS) -->
    <link rel="mask-icon" href="{{ asset('images/safari-pinned-tab.svg') }}" color="#5bbad5">

    <!-- Windows and Old Browsers -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Web App Manifest (For PWA Support) -->
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description"
        content="Открийте кабинета на Д-р Иванка Кулевска-Гоновска,
    специалист по кардиология, и Д-р Кристиян Гоновски, ортопед.
    Обединявайки професионализъм и грижа, предлагаме цялостна медицинска помощ,
    адаптирана към вашите нужди.">

    <meta name="keywords"
        content="Д-р Иванка Кулевска-Гоновска, Кардиолог,
    Д-р Кристиян Гоновски, Ортопед, медицински услуги, кабинет, здраве, лечение,
    специалисти, кардиология, ортопедия">

    <meta name="author" content="Yordan Yordanov , Rumen Koychev">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,400;0,8..144,700;1,8..144,100;1,8..144,400;1,8..144,700&family=Rubik:ital,wght@0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

</head>


<body>
    <div class="container-fluid">
        <x-navigation />
        @yield('content')
        <x-footer />
    </div>

    <!-- Load WOW.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Initialize WOW.js -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new WOW().init();
        });
    </script>

    <!-- Your main JS file -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Additional scripts that may be pushed from child views -->
    @stack('scripts')

</body>

</html>
