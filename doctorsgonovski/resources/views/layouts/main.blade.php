<!DOCTYPE html>

<html>

    <head>

        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="/js/app.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

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
