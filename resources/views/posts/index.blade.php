@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
    
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card p-3 mb-2">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <h3>No posts available!</h3>
            
        @endif

    </div>
@endsection