<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Judson" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center my-5">
                <h1 class="bigTitle">ADAC</h1>
                <h4>Association pour le Développement des Arts en Comminges</h4>
            </div>  
                <form method="POST" action="{{ route('login') }}" class="mx-auto">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="form-label"></label>
                        <div class="col-md-5 mx-auto">
                            <input id="email" placeholder="Adresse e-mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="form-label"></label>
                        <div class="col-md-5 mx-auto">
                            <input id="password" placeholder="Mot de passe" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="mx-auto m-2">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Se souvenir de moi
                                </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-danger">
                                Connexion
                            </button>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="mx-auto">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Mot de passe oublié?
                            </a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

</body>
</html>

