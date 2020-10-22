@extends('layout.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <img src="{{ URL::to('/img/logo.png') }}">
        <p>Hello welcome to my first laravel app. This application is for practice purpose only.</p>
    </div>
   
@endsection
