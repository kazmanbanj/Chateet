<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chateet</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="mb-5">
    <div id="app">
        <section class="px-8 py-4 mb-2 flex">
            <header class="container mx-auto">
                <h1 class="flex">
                    <img src="/images/test.ico" alt="Chateet">
                </h1>
            </header>

            @if (auth()->check())
                @include ('../searchbar')
            @endif
        </section>

        {{ $slot }}
    </div>
</body>

<footer class="text-center mt-4">
    Chateet - CopyRight &copy; 2020 - {{date('Y')}} Banjoko Kazeem. All rights reserved
</footer>
</html>