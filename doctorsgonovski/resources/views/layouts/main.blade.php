<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <title>Doctors Gonovski</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="Открийте кабинета на Д-р Иванка Кулевска-Гоновска,
        специалист по кардиология, и Д-р Кристиян Гоновски, ортопед.
        Обединявайки професионализъм и грижа, предлагаме цялостна медицинска помощ,
        адаптирана към вашите нужди.">

        <meta name="keywords" content="Д-р Иванка Кулевска-Гоновска, Кардиолог,
        Д-р Кристиян Гоновски, Ортопед, медицински услуги, кабинет, здраве, лечение,
        специалисти, кардиология, ортопедия">

        <meta name="author" content="Yordan Yordanov , Rumen Koychev">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">




    </head>

    <body>
        <div class="container-fluid">
            <x-navigation/>
            @yield('content')
            <x-footer/>
        </div>

        <!-- Load WOW.js library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

        <!-- Initialize WOW.js -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new WOW().init();
            });
        </script>

        <!-- Your main JS file -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Additional scripts that may be pushed from child views -->
        @stack('scripts')

    </body>
</html>
