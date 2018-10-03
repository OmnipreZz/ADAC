@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($posts as $post)

    <div class="card mb-5">
        <div class="card-header text-center">
            {{ $post->title }}
            <span class="badge badge-primary">{{$post->category->name}}</span>
            @auth
     @if(!$post->fav)
     <a href="{{route('favoriteStore',$post->id)}}" class="btn">Ajouter aux favoris</a>
     @else
     <a href="{{route('favoriteDestroy',$post->id)}}" class="btn">Retirer des favoris</a>
     @endif
    @endauth
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

            @if ($post->author ==  Auth::user()->name)

            <a href="{{route('postDestroy',$post->id)}}" class="btn btn-outline-danger" role="button">Delete</a>
            <a href="{{route('postEdit',$post->id)}}" class="btn btn-outline-primary" role="button">Update</a>

            @endif

            @endauth

            <a href="{{route('postShow',$post->id)}}" class="btn btn-outline-primary" role="button">Show</a>
        </div>



    </div>
    @endforeach
</div>

<!--  -->

@endsection

