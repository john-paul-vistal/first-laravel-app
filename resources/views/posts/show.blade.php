@extends('layout.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-primary mt-3 px-4">Go Back</a>
        <h1 class="mt-3">{{$post->title}}</h1>
        <div class="container">
            <p>{{$post->body}}</p>
        </div>
        <hr>
        <small>Writtern on {{$post->created_at}}</small>
    </div>
@endsection