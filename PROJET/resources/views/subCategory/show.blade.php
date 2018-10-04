@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h1>Catégorie</h1>
    <div class="card mb-5">
        <div class="card-header text-center">
            {{ $category->id }} // {{ $category->name }}
        </div>
    <div class="card-body">
    <p class="card-text">
        <h1></h1>
        <ul>
            @if ($subCategories)
                @foreach ($subCategories as $index => $subCategory)
                    <li>{{ $index }} {{ $subCategory }}</li>
                @endforeach
            @else
                Cette catégorie n'a pas encore de sous catégories
            @endif
        </ul>
    </p>
</div>
<div class="card-footer">
    @auth
    @if (Auth::user()->role_id == 1)
        <a href="{{ route('category_edit', $category->id ) }}" class="btn btn-outline-warning" role="button">Editer la catégorie</a>
        <a href="{{ route('category_destroy', $category->id) }}" class="btn btn-outline-danger" role="button">Supprimer la catégorie</a>
    @endif
    @endauth
</div>
@endsection