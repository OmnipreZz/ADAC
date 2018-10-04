@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Toutes les sous catégories') }}</div>

                <div class="card-body">
                @auth
                <ul>
                    @foreach ($subCategories as $subCat)
                        <li>{{$subCat->id}} // <a href="{{route('subcategory_show', $subCat->id)}}">{{$subCat->name}}</a></li>
                    @endforeach
                </ul>
                @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
