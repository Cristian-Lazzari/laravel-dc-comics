<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite ('resources/js/app.js')
</head>
    <body>

        <header>
            @include('partials.header')
        </header>
        
        <main>
            @yield('contents')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>