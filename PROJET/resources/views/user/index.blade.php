@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Toutes les catégories') }}</div>

                <div class="card-body">
                @auth
                <ul>
                    @foreach ($users as $user)
                        <li>{{$user->id}} // <a href="{{route('user_show', $user->id)}}">{{$user->name}}</a></li>
                    @endforeach
                </ul>
                @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
