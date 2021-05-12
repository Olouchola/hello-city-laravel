<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Us| Laravel</title>
    </head>
    <body>
        <p>Bonjour &hearts; les amis</p>
        <a href="/">Page d'accueil</a>
        <p>It's currently {{ date('H:i A') }}.</p>

        <footer>&copy; Copyright {{date('Y')}} &middot; <a href="/about-us">About Us</a></footer>
    </body>
</html>
