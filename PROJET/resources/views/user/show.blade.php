@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">{{ __('Utilisateur') }} {{ $user->id }}</div>

                <div class="card-body">
                    <h5 class="card-title">Nom / Prénom</h5>
                    <p class="card-text">{{$user->name}}</p>
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">{{$user->email}}</p>
                    <h5 class="card-title">Rôle :</h5>
                    <p class="card-text">{{$user->role->name}}</p>
                    <a href="{{ route ('user_edit', $user->id) }}" class="btn btn-outline-primary">Editer le profil</a>
                    <!-- <a href="{{ route ('user_delete', $user->id) }}" class="btn btn-outline-danger">Supprimer le profil</a> -->
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
