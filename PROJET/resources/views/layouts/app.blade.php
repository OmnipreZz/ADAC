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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Judson|Merriweather" rel="stylesheet">  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm mt-3 ml-3 mr-3">
                <div class="container">
                    <a class="navbar-brand logo shadow-sm text-white" href="{{ url('/') }}">
                        <i class="fas fa-music ml-3 mr-2"> ...</i> <span class="mr-3">ADAC</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span> 
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('user_show', Auth::user()->id ) }}">Mon profil</a>
                                    
                                    <a class="dropdown-item" href="{{ route('user_edit', Auth::user()->id ) }}">Editer mon profil</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row">
                <leftside class="col-2 sticky-top">
                    <div class="stickyBloc"></div>
                    <div class="cssSide my-3 shadow bg-white text-center">

 <!--//////////////BUTTON LEFT SIDE/////////////////-->
                        
                    @foreach ($categories as $cat)
                        <!-- <a href="{{route('category_show', $cat->id)}}">{{$cat->name}}</a> -->
                        <div class="my-1">
                            <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapse{{$cat->id}}" aria-expanded="false" aria-controls="collapse">{{$cat->name}}</button>
                        </div>
                        <div class="collapse text-left" id="collapse{{$cat->id}}">
                            <ul>
                                <li>
                                    <a>guitare</a>
                                </li>
                                <li>
                                    <a>basse</a>
                                </li>
                                <li>
                                    <a>piano</a>
                                </li>
                                <li>
                                    <a>synthe</a>
                                </li>
                            </ul>
                        </div>
                    @endforeach

                    </div>
                </leftside>

                <main class="col-7 py-4">
                    <div class="lightMain fixed-top"></div>
                    @yield('content')
                </main>

                <rightside class="col-3 sticky-top">
                    <div class="stickyBloc"></div>
                    <div class="cssSide my-3 shadow bg-white">

                        <h5>Posts</h5>
                        <a href="{{route('postCreate')}}" class="">Créer un post</a><br>
                        <hr>
                        
                        <h5>Utilisateurs</h5>
                        <a href="{{ route('user_index') }}" class="">Index Utilisateurs</a><br>
                        <a href="{{ route('user_create') }}" class="">Créer un Utilisateurs</a><br>
                        <a href="{{ route('user_show', Auth::user()->id ) }}" class="">Voir un profil d'utilisateur</a><br>
                        <hr>
                    
                        <h5>Categories</h5>
                        <a href="{{route('category_index')}}" class="">Index Categories</a><br>
                        <a href="{{route('category_create')}}" class="">Créer une Categorie</a><br>
                        <a href="{{route('category_show', 1)}}" class="">Voir une Categorie</a><br>
                        <hr>
                        
                        <h5>Sous catégories</h5>
                        <a href="{{route('category_index')}}" class="">Index Sous categories</a><br>
                        <a href="{{route('category_show', 1)}}" class="">Voir une Sous categories</a><br>
                        <hr>

                    </div>


                </rightside>
            </div>

        </div>
    </div>
</body>
</html>
