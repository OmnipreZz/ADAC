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
                    @foreach ($categories as $cat)
                        <li>
                            {{$cat->id}} // <a href="{{route('category_show', $cat->id)}}">{{$cat->name}}</a>
                            <!-- <ul>
                                @if ($cat->subcategories()->get())
                                    @foreach ($cat->subcategories()->get() as $index => $subCategory)
                                        <li>{{ $index }} <a href={{ route('subcategory_show', $subCategory->id ) }}>{{ $subCategory->name }}</a></li>
                                    @endforeach
                                @else
                                    Cette catégorie n'a pas encore de sous catégories
                                @endif
                            </ul> -->
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
