<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Us|Laravel</title>
    </head>
    <body>
        <h2>welcome to Laravel</h2>
        <p>It's currently {{ date('H:i A') }}.</p>

        <footer>&copy; Copyright {{date('Y')}} &middot; <a href="/about-us">About Us</a></footer>
    </body>
</html>
