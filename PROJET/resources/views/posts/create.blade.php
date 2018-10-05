@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Créer un post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postStore') }}" aria-label="" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" rows="10" required style="resize:none;"></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-4 col-form-label text-md-right">{{ __('Fichiers') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file[]" multiple>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category"class="col-md-4 col-form-label text-md-right">Catégories</label>
                            <select onchange="setCurrentCategory(this.value)" name="category" class="form-control col-md-6" id="category">
                            
                                <option value="lol">Choisissez une catégorie</option>
                                
                                @foreach($categories as $id => $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                        
                            <label id="subcategories_container" class="d-none col-md-4 col-form-label text-md-right">Sous catégories</label>

                            @foreach($subcategories as $subcat)
                                <div class="d-none childs parent_{{$subcat->category_id}} input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input name="subcats[]" value={{$subcat->id}} type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <div class="form-control">{{$subcat->name}}</div>
                                </div>
                            @endforeach

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
@endsection