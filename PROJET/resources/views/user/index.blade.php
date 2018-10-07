@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tous les utilisateurs') }}</div>

                <div class="card-body">
                @auth
                <ul class="list-unstyled">

                    @foreach ($users as $user)
                    <li class="media border-bottom my-1">
                    <span class="mx-3">{{$user->id}}</span>
                        @if ($user->role_id == 1)
                        <i class="mr-3 fas fa-crown" title="Role : Administrateur"></i>
                        @elseif ($user->role_id == 2)
                        <i class="mr-3 fas fa-chalkboard-teacher" title="Role : Professeur"></i>
                        @elseif ($user->role_id == 3)
                        <i class="mr-3 fas fa-user-graduate" title="Role : Eleve"></i>
                        @endif

                        <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="{{route('user_show', $user->id)}}">{{$user->name}}</a></h5>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
