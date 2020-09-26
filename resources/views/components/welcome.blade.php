<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chattar</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
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
        </section>
        <div class="links">

            @auth
                <a href="{{ url('/chats') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endauth
        </div>
    </div>



</body>
</html>
