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
            <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm mt-3 mx-3">
                <div class="container">
                    <a class="navbar-brand logo shadow-sm text-white" href="{{ url('/') }}">
                        <i class="fas fa-music ml-3 mr-2"> ...</i> <span class="mr-3">ADAC</span>
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
                    <div class="stickyBloc">
                    </div>
                    <div class="cssSide my-3 shadow bg-white text-center">
                        @include('../part/leftside')
                    </div>
                </div>
                 <!-- mobile left side -->
                <div class="leftSideMobil col-1">
                    <div class="stickyBloc">
                    </div>
                    <div id="wrapper">
                        <div class="cssSide my-3 shadow bg-white text-center" id="sidebar-wrapper">
                            @include('../part/leftside')
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
                        @include('../part/rightside')
                    </div>
                </div>
                <!-- mobile right side -->
                <div class="rightSideMobil col-1">
                    <div class="stickyBloc">
                    </div>
                    <div id="wrapper1">
                        <div class="cssSide my-3 shadow bg-white" id="sidebar-wrapper1">
                            @include('../part/rightside')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
