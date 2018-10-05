@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h1>Sous Catégorie</h1>
    <div class="card mb-5">
        <div class="card-header text-center">
            {{ $subCategory->id }} // {{ $subCategory->name }}
        </div>
    <div class="card-body">
    <p class="card-text">
        <h1></h1>
        <ul>

        </ul>
    </p>
</div>
<div class="card-footer">
    @auth
    @if (Auth::user()->role_id == 1)
        <a href="{{ route('category_edit', $subCategory->id ) }}" class="btn btn-outline-warning" role="button">Editer la catégorie</a>
        <a href="{{ route('category_destroy', $subCategory->id) }}" class="btn btn-outline-danger" role="button">Supprimer la catégorie</a>
    @endif
    @endauth
</div>
@endsection