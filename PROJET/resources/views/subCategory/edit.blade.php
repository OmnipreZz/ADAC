@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modifier la category</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('category_update',$category->id) }}" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$category->name}}" required autofocus>

                            </div>
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