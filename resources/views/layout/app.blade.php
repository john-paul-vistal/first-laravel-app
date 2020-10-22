<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','PRACTICE APP')}}</title>
        <link rel="icon" href="{{ URL::to('/img/logo.png') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body>
        @include('include.navbar')
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>
