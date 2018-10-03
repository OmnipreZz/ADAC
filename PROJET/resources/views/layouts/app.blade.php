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
                   
                   <!-- boutton instruments -->
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
                            <a>basse</a>
                        </li>
                        <li>
                            <a>piano</a>
                        </li>
                        <li>
                            <a>synthe</a>
                        </li>
                        <li>
                            <a>batterie</a>
                        </li>
                        <li>
                            <a>chant</a>
                        </li>
                        <li>
                            <a>trompette</a>
                        </li>
                        <li>
                            <a>saxophone</a>
                        </li>
                        <li>
                            <a>clarinette</a>
                        </li>
                        <li>
                            <a>flute</a>
                        </li>
                        <li>
                            <a>eveil</a>
                        </li>
                        <li>
                            <a>accordeon</a>
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
                <!-- boutton ateliers -->
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
                <!-- boutton Evenements -->
                <div class="pb-4 ml-2">
                    <button class="btn btdesign text-white shadow-sm" type="button">
                        Evènements
                    </button>
                </div>
                <!-- boutton FM -->
                <div class="ml-2">
                    <button class="btn btdesign text-white shadow-sm" type="button">
                        F . M
                    </button>
                </div>

            </div>
        </leftside>

        <main class="col-7 py-4">
            <div class="lightMain fixed-top"></div>
            @yield('content')
        </main>

        <rightside class="col-3 sticky-top">
            <div class="stickyBloc"></div>
            <div class="cssSide my-3 shadow bg-white">
                <a href="{{route('postCreate')}}" class="btn">Créer un post</a>
            </div>


        </rightside>
    </div>

</div>
</div>
</body>
</html>
