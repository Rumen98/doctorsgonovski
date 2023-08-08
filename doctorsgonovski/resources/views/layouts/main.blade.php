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

            <div class="container-fluid main-content">

                {{-- <div class="mt-2 mb-2">

                    <div class="row">

                        <div class="col-4">

                            <x-team-management/>

                        </div>

                        <div class="col-4">

                            <x-calendar/>

                        </div>

                        <div class="col-4">

                            <x-add-transporter/>

                        </div>

                    </div>

                </div> --}}

                <div class="ms-2 me-2">
                    @yield('content')
                </div>
            </div>
        </div>
        @stack('scripts')
    </body>
</html>
