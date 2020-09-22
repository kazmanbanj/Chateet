<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chattar</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-4 flex">
            <header class="container mx-auto">
                <h1 class="flex">
                    <img src="/images/test.ico" alt="Chattar">
                    Chattar
                </h1>
            </header>

            @if (auth()->check())
            @include ('../searchbar')
            @endif
        </section>

        {{ $slot }}
    </div>
</body>

</html>