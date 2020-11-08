<!doctype html>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://nikki-eigo-app.herokuapp.com/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://nikki-eigo-app.herokuapp.com/css/app.copy.css">
    <!-- <link href="{{ asset('css/app.copy.css') }}" rel="stylesheet"> -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>

<body>
    <div id="app bg-light">
        <nav class="bg-light navbar navbar-expand-md navbar-dark bg-secondary shadow-sm sticky-top">

            <a class="navbar-brand pl-3" href="https://nikki-eigo-app.herokuapp.com/">
                <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604412091/ryud9yb5rcdwulymagvj.png"
                    height=100 width=100 class="logo mr-2">NIKKI
            </a>

            <button class="navbar-toggler mr-3" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar2 -->
                <ul class="navbar-nav mr-auto">
                    <!-- <a href="https://japanglish.herokuapp.com/home" class="nav-item px-3 d-inline-block vertical">検索</a>
        <a href="http://127.0.0.1:8000/" class="nav-item px-3">Movie一覧</a> -->

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item ">
                        <a class="nav-link text-dark " href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-1"></i>{{ __('ログイン') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('register') }}"><i class="fas fa-address-card mr-1"></i>{{ __('登録') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right text-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-black-" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <i class="fas fa-sign-in-alt mr-1"></i>
                                {{ __('ログアウト') }}
                            </a>

                            　
                            <a class="dropdown-item text-dark"
                                href="{{ route('users.show',['user' => Auth::id() ]) }}"><i class="fas fa-address-book mr-2"></i>プロフィール</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="main">
            @yield('content')
        </main>
    </div>

    <div class="bg-light w-100 text-center clear">
        <div class="col-12 p-0">
            <footer id="main-footer" class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col py-2 mt-4">
                            <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604412091/ryud9yb5rcdwulymagvj.png"
                                alt="" height="30" width="70" class="footer-logo mb-3">
                            <p class="contact ">Copyright© 2020 Uoya Ryota </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>
