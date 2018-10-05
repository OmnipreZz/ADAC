<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{asset('logo.png')}}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Judson|Merriweather" rel="stylesheet">  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar1.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="d-inline-block align-top" height="50" src="{{asset('logo.png')}}" alt="ADAC logo">
                    </a>

                    <button href="#menu-toggle" id="menu-toggle" class="btn btCache persoPurple text-white rounded-circle" role="button"><i class="fas fa-angle-left"></i></button>

                    <button href="#menu-toggle1" id="menu-toggle1" class="btn btCache persoPurple text-white rounded-circle" role="button"><i class="fas fa-angle-right"></i></button>

                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span> 
                    </button> -->

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
            </nav>


            <div class="row">

<!--//////////////LEFT SIDE/////////////////-->
                <div class="leftSide col-2 sticky-top">
                    <div class="stickyBloc"></div>
                    <div class="cssSide my-3 shadow bg-white text-center">

                    @if (isset($categories))   
                    @foreach ($categories as $cat)
                        <div class="my-1">
                            <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapse{{$cat->id}}" aria-expanded="false" aria-controls="collapse">{{$cat->name}}</button>
                        </div>
                        <div class="collapse text-left" id="collapse{{$cat->id}}">
                            <ul>
                                @foreach ($cat->subcategories()->get() as $subcat)
                                    <li>
                                        <a href="">{{$subcat->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                    @else
                        La variable $categories n'a pas étée passée à cette page
                    @endif
  
                    </div>
                </div>

                <!-- mobile left side -->
                <div class="leftSideMobil col-1">
                    <div class="stickyBloc">
                    </div>
                    <div id="wrapper">
                        <div class="cssSide my-3 shadow bg-white text-center" id="sidebar-wrapper">
                                <!-- bouton instruments -->
                            <div class="py-4 ml-2">
                                <button class="btn btdesign text-white shadow-sm" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                    Instruments
                                </button>
                            </div>
                            <div class="collapse text-left" id="collapseExample1">
                                    <ul>
                                        <li>
                                            <a>guitare</a>
                                        </li>
                                        <li>
                                            <a>accordeon chromatique</a>
                                        </li>
                                        <li>
                                            <a>diatonique</a>
                                        </li>
                                        <li>
                                            <a>mao</a>
                                        </li>
                                        <li>
                                            <a>harpe</a>
                                        </li>
                                        <li>
                                            <a>cornemuse</a>
                                        </li>
                                        <li>
                                            <a>violon</a>
                                        </li>
                                        <li>
                                            <a>violoncelle</a>
                                        </li>
                                    </ul>
                            </div>
                                <!-- bouton ateliers -->
                            <div class="pb-4 ml-2">
                                <button class="btn btdesign text-white shadow-sm" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                    Ateliers
                                </button>
                            </div>
                            <div class="collapse text-left" id="collapseExample2">
                                <ul>
                                    <li>
                                        <a>trad</a>
                                    </li>
                                    <li>
                                        <a>classique</a>
                                    </li>
                                    <li>
                                        <a>rock</a>
                                    </li>
                                    <li>
                                        <a>jazz</a>
                                    </li>
                                </ul>
                            </div>
                                <!-- bouton Evenements -->
                            <div class="pb-4 ml-2">
                                <button class="btn btdesign text-white shadow-sm" type="button">
                                Evènements
                                </button>
                            </div>
                                <!-- bouton FM -->
                            <div class="ml-2">
                                <button class="btn btdesign text-white shadow-sm" type="button">
                                F . M
                                </button>
                            </div>   
                        </div>
                    </div>
                </div>

<!--//////////////MAIN CONTENT/////////////////-->
                <main class="col-10 col-lg-7 col-xl-7 py-4">
                    <div class="lightMain fixed-top"></div>
                    @yield('content')
                </main>

<!--//////////////RIGHT SIDE/////////////////-->
                <div class="rightSide col-3 sticky-top">
                    <div class="stickyBloc">
                    </div>
                    <div class="cssSide my-3 shadow bg-white">

                        <h3>{{Auth::user()->name}}</h3>
                        <a href="{{route('postIndex')}}" class="">Voir tous les posts</a><br>
                        <a href="{{route('postFavorites')}}" class="">Voir mes favoris</a><br>
                        @if(in_array(Auth::user()->role_id,[1,2]))
                        <a href="{{route('postCreate')}}" class="">Créer un post</a><br>
                        <a href="{{route('postMyPosts')}}" class="">Voir mes posts</a><br>
                        @endif
                        <hr>

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
                        <a href="{{route('subcategory_index')}}" class="">Index Sous categories</a><br>
                        <a href="{{route('subcategory_create')}}" class="">Créer une sous categorie</a><br>
                        <a href="{{route('subcategory_show', 1)}}" class="">Voir une Sous categorie</a><br>
                        <hr>

                    </div>
                </div>

                <!-- mobile right side -->
                <div class="rightSideMobil col-1">
                    <div class="stickyBloc">
                    </div>
                    <div id="wrapper1">
                        <div class="cssSide my-3 shadow bg-white" id="sidebar-wrapper1">
                            <h3>{{Auth::user()->name}}</h3>
                            <a href="{{route('postIndex')}}" class="btn">Voir tous les posts</a>
                            <a href="{{route('postFavorites')}}" class="btn">Voir mes favoris</a>
                            @if(in_array(Auth::user()->role_id,[1,2]))
                            <a href="{{route('postCreate')}}" class="btn">Créer un post</a>
                            <a href="{{route('postMyPosts')}}" class="btn">Voir mes posts</a>
                            @endif
                        </div>
                    </div>
                </div>

</div>
</div>
</body>
</html>
