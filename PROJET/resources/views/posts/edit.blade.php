@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier le post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postUpdate',$post->id) }}" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" rows="10" required style="resize:none;">{{$post->content}}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category"class="col-md-4 col-form-label text-md-right">Catégories</label>
                            <select name="category" class="form-control col-md-6" id="category">
                                @foreach($categories as $id => $category)
                                <option value="{{$id}}"
                                @if ($hisCategory->id == $id)
                                {{'selected'}}
                                @endif

                                >{{$category}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send') }}
                                </button>

                            </div>
                        </div>

                        
                        <!-- <div class="form-group row">
                            <label for="tags"class="col-md-4 col-form-label text-md-right">Tags</label>
                            <select name="tags[]" class="form-control col-md-6" id="tags" multiple>
                                
                            </select>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection