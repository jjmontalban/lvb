<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">

        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Componentes</title>
    </head>
    <body>
        <div id="app">

            <customers></customers>
        
        </div>

        <script src="{{ asset('public/js/app.js') }}"></script>
    </body>
</html>
