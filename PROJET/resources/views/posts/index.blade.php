@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($posts as $post)

    <div class="card mb-3 shadow">
        <div class="card-body text-center bg-white">
            <h2>{{ $post->title }}</h2><br>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="mx-5 my-3">
            <div>
                <span class="badge badge-primary">{{$post->category->name}}</span>
            </div>
            <p class="card-text postedBy">Posté par {{ $post->author }} le {{ date('d/m/Y', strtotime($post->created_at)) }} à {{ date('H:i', strtotime($post->created_at)) }}</p>

            @if ($post->updated_at !=  $post->created_at )

            <p class="card-text postedBy">Modifié par {{ $post->author }} le {{ date('d/m/Y', strtotime($post->updated_at)) }} à {{ date('H:i', strtotime($post->updated_at)) }}</p>

            @endif

            @auth

            @if ($post->author ==  Auth::user()->name )
            <div class="text-right">
            <a href="/post/destroy/{{$post->id}}" class="btn btn persoPurple" role="button"><i class="fas fa-trash-alt text-white"></i></a>
            <a href="/post/edit/{{$post->id}}" class="btn btn persoPurple" role="button"><i class="fas fa-edit text-white"></i></a>

            @endif

            @endauth

            <a href="/post/show/{{$post->id}}" class="btn persoPurple" role="button"><i class="fas fa-eye text-white"></i></a>

            @auth
                @if(!$post->fav)
                <a href="{{route('favoriteStore',$post->id)}}" class="btn persoPurple" role="button"><i class="far fa-star text-white"></i></a>
                @else
                <a href="{{route('favoriteDestroy',$post->id)}}" class="btn persoPurple" role="button"><i class="fas fa-star text-warning"></i></a>
                @endif
            @endauth
            </div>
        </div>



    </div>
    @endforeach
</div>

<!--  -->

@endsection

