@extends('layouts.app')

@section('content')
<div class="container">

<div class="card mb-3 shadow">
        <div class="m-2">
            @auth
                @if(!$post->fav)
                <a href="{{route('favoriteStore',$post->id)}}" class="m-2" role="button"><i class="far fa-star fa-2x textPurple"></i></a>
                @else
                <a href="{{route('favoriteDestroy',$post->id)}}" class="m-2" role="button"><i class="fas fa-star fa-2x text-warning"></i></a>
                @endif
            @endauth
            <span class="badge badge-primary">{{$post->category->name}}</span>
        </div>
        <div class="card-body text-center bg-white text-secondary">
            <h2>{{ $post->title }}</h2><br>
            <p class="card-text mb-3">{{ $post->content }}</p>
        </div>
        <div class="card-footer mx-5 my-3 bg-white">
            <p class="card-text postedBy">Posté par {{ $post->author }} le {{ date('d/m/Y', strtotime($post->created_at)) }} à {{ date('H:i', strtotime($post->created_at)) }}</p>

            @if ($post->updated_at !=  $post->created_at )

            <p class="card-text postedBy">Modifié par {{ $post->author }} le {{ date('d/m/Y', strtotime($post->updated_at)) }} à {{ date('H:i', strtotime($post->updated_at)) }}</p>

            @endif

            <div class="text-right">
            @auth
            
            @if ($post->author ==  Auth::user()->name || Auth::user()->role_id == 1 )

            <a href="{{route('postEdit',$post->id)}}" class="btn btn persoPurple" role="button" title="Editer"><i class="fas fa-edit text-white"></i></a>
            @endif

            
            @if (Auth::user()->role_id == 1)
            <a href="{{route('postDestroy',$post->id)}}" class="btn btn persoPurple" role="button" title="Supprimer"><i class="fas fa-trash-alt text-white"></i></a>
            @endif


            @endauth
            <a href="{{route('postShow',$post->id)}}" class="btn persoPurple" role="button" title="Voir le post"><i class="fas fa-eye text-white"></i></a>
            </div>
        </div>
    </div>

<h1>Commentaires</h1>
@foreach ($hisComments as $comment)

<div class="card mb-3 shadow">
    <div class="card-body text-center bg-white text-secondary">
        <p class="card-text mb-3">{{ $comment->content }}</p>
    </div>
    <div class="card-footer mx-5 my-3 bg-white">
        <p class="card-text postedBy">Posté par {{ $comment->author }} le {{ date('d/m/Y', strtotime($comment->created_at)) }} à {{ date('H:i', strtotime($comment->created_at)) }}</p>

        @if ($comment->updated_at !=  $comment->created_at )

        <p class="card-text postedBy">Modifié par {{ $post->author }} le {{ date('d/m/Y', strtotime($post->updated_at)) }} à {{ date('H:i', strtotime($post->updated_at)) }}</p>

        @endif

        <div class="text-right">
            @auth
            
            @if ($comment->author ==  Auth::user()->name || Auth::user()->role_id == 1 )

            <a href="{{route('postEdit',$post->id)}}" class="btn btn persoPurple" role="button" title="Editer"><i class="fas fa-edit text-white"></i></a>
            @endif

            
            @if (Auth::user()->role_id == 1)
            <a href="{{route('postDestroy',$post->id)}}" class="btn btn persoPurple" role="button" title="Supprimer"><i class="fas fa-trash-alt text-white"></i></a>
            @endif


            @endauth
        </div>
    </div>
</div>
@endforeach

<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Poser une question</div>

                <div class="card-body">
                    <form method="POST" action="{{route('commentStore',$post->id)}}" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" rows="10" required style="resize:none;"></textarea>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection