@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)
    <div class="card mb-3 shadow">
        <div class="m-2">
            @auth
                @if(!$post->fav)
                <a href="{{route('favoriteStore',$post->id)}}" class="m-2" role="button"><i class="far fa-star fa-2x textPurple"></i></a>
                @else
                <a href="{{route('favoriteDestroy',$post->id)}}" class="m-2" role="button"><i class="fas fa-star fa-2x text-warning"></i></a>
                @endif
            @endauth
            <span class="h4"><span class="badge btnVip text-white">{{$post->category->name}}</span></span>
            @foreach ($post->subcategories as $subcatxxx)
                <span class="h4"><span class="badge btnVip text-white">{{$subcatxxx->name}}</span></span>
            @endforeach
        </div>
        <div class="card-body text-center bg-white">
            <h2><a class="postTitle" href={{ route('postShow', $post->id) }}>{{ $post->title }}</a></h2><br>
            <p class="card-text mb-3">{{ $post->content }}</p>
        </div>
        <div class="card-footer mx-5 my-3 bg-white">
            <p class="card-text postedBy">Posté par
                @if (Auth::user()->role_id == 1)
                <a href="{{ route('user_show',$post->user_id)}}"> {{ $post->author }}</a>
                @else
                {{ $post->author }}
                @endif 
                 le {{ date('d/m/Y', strtotime($post->created_at)) }} à {{ date('H:i', strtotime($post->created_at)) }}</p>

            @if ($post->updated_at !=  $post->created_at )

            <p class="card-text postedBy">Modifié par {{ $post->author }} le {{ date('d/m/Y', strtotime($post->updated_at)) }} à {{ date('H:i', strtotime($post->updated_at)) }}</p>

            @endif

            <div class="text-right">
                <a href="{{route('postShow',$post->id)}}" class="btn persoPurple" role="button" title="Voir le post"><i class="fas fa-eye text-white"> Zoom</i></a>
            @auth
            
            @if ($post->author ==  Auth::user()->name || Auth::user()->role_id == 1 )

            <a href="{{route('postEdit',$post->id)}}" class="btn persoPurple text-white" role="button" title="Editer"><i class="fas fa-edit"></i></a>
            @endif

            
            @if (Auth::user()->role_id == 1)
            <a href="{{route('postDestroy',$post->id)}}" class="btn btnAdmin text-white" role="button" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
            @endif


            @endauth
            </div>
        </div>
    </div>
    @endforeach

{{ $posts->links() }}

@endsection

