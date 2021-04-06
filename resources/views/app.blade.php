<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WallOfTears</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    </head>
    <body>
        <div id="app">
        <principal></principal>
        <!-- <router-view></router-view> -->
        </div>
    
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
