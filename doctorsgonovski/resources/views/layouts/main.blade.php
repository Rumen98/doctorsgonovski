<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <title>Doctor Gonovski</title>

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

        <meta name="author" content="Д-р Иванка Кулевска-Гоновска, Д-р Кристиян Гоновски">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>

    <body>
        <div class="container-fluid">
            <x-navigation/>
            @yield('content')
            <x-footer/>
        </div>
        @stack('scripts')
    </body>
</html>
