<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <h1>Welcome To {{config('app.name')}}!</h1>
        <p>This is based on the "Laravel from scratch" series on youtube by traversy media.</p>
    </body>
</html>
