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
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.copy.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary shadow-sm sticky-top">

<a class="navbar-brand pl-3" href="http://127.0.0.1:8000/">
    <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585791772/logo_transparent_jj7tm2.png" height=100 width=100 class="logo mr-2">NIKKI
</a>

<button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                　
                <a class="dropdown-item" href="{{ route('users.show',['user' => Auth::id() ]) }}">Profile</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</div>
</nav>

        <main class="main py-4 my-5">
            @yield('content')
        </main>
    </div>

    <div class="w-100 text-center">
        <div class="col-12 p-0">
            <footer id="main-footer" class="bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col py-2">
                            <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585791772/logo_transparent_jj7tm2.png" alt="" height="200"
                                width="200" class="footer-logo">
                            <p class="contact ">Copyright© 2020 Uoya Ryota </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
      </div>

</body>
</html>
