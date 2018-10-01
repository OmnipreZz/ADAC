@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Posts</h1>
    @foreach ($posts as $post)

    <div class="card mb-5">
        <div class="card-header text-center">
            {{ $post->title }}
            
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="card-footer">
            <p class="card-text">Posted by {{ $post->author }} at {{ $post->created_at}}</p>

            @if ($post->updated_at !=  $post->created_at )

            <p class="card-text">Updated at {{ $post->updated_at}}</p>

            @endif

            @auth

            @if ($post->author ==  Auth::user()->name )

            <a href="/post/destroy/{{$post->id}}" class="btn btn-outline-danger" role="button">Delete</a>
            <a href="/post/edit/{{$post->id}}" class="btn btn-outline-primary" role="button">Update</a>

            @endif

            @endauth

            <a href="/post/show/{{$post->id}}" class="btn btn-outline-primary" role="button">Show</a>
        </div>



    </div>
    @endforeach
</div>

<!--  -->

@endsection

