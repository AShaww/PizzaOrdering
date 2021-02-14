<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StayStrong Pizza Joint!</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
            @yield('content')
            
            <footer>
                Copyright 2021 Pizza House
            </footer>
    </body>
</html>