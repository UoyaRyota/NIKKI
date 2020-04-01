@extends('layout')

@section('content')

<!-- Left Side Of Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-secondary shadow-sm sticky-top">

    <a class="navbar-brand pl-3" href="http://127.0.0.1:8000/">
        <img src="" class="logo mr-2">NIKKI
    </a>

    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar2 -->
        <ul class="navbar-nav mr-auto">
            <a href="https://japanglish.herokuapp.com/home" class="nav-item px-3 d-inline-block vertical">検索</a>
            <a href="http://127.0.0.1:8000/" class="nav-item px-3">Movie一覧</a>

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
<div class="container">

    <div class="row text-center">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-0 py-md-5 pb-4 pt-4 post-index-title">POST</h1>

        </div>
    </div>
    <form action="{{ route('articles.store', null, false) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field( ) }}

        <div class="row">


            <!-- 左寄せ -->

            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="mb-0">Title</label>
                    <input type="text" class="form-control mt-0" name='title'>
                </div>

                <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585123691/xk4dbdfjm4xj2sfbbap8.jpg" width="250" height="250" class="home-profile-img">

                <div class="container my-auto">
                    <div class="form-group mt-4">
                        　 <label for="img_url_1">投稿画像</label> <br>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        <div class="form-group mt-4">
                        </div>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="comment" class="mb-0">Comment</label>
                    <input type="comment" class="form-control mt-0" name='comment'>
                </div>

                <div class="form-group">
                    <label for="method" class="mb-0">Study Method</label>
                    <input type="method" class="form-control mt-0" name='method'>
                </div>
                <p class="d-none d-md-block">※学習方法を記入してください。</p>

                <div class="form-group">
                    <label for="phrase" class="mb-0">Phrase</label>
                    <input type="phrase" class="form-control mt-0" name='phrase'>
                </div>
                <p class="d-none d-md-block">※動画で使われているphraseをピックアップして記入してください。</p>

                <div class="form-group">
                    <label for="goal" class="mb-0">Goal</label>
                    <input type="goal" class="form-control mt-0" name='goal'>
                </div>

                
            </div>


            <!-- 右寄せ -->
            <div class="col-md-6 my-md-auto mt-4">
            <p class="d-none d-md-block">※動画のURLを貼り付ける方法はこちらをご参照ください。</p>
                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie1</label>
                    <textarea class="form-control mt-0" name='movie_link'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie2</label>
                    <textarea class="form-control mt-0" name='movie_link2'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie3</label>
                    <textarea class="form-control mt-0" name='movie_link3'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie4</label>
                    <textarea class="form-control mt-0" name='movie_link4'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie5</label>
                    <textarea class="form-control mt-0" name='movie_link5'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie6</label>
                    <textarea class="form-control mt-0" name='movie_link6'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie7</label>
                    <textarea class="form-control mt-0" name='movie_link7'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie8</label>
                    <textarea class="form-control mt-0" name='movie_link8'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie9</label>
                    <textarea class="form-control mt-0" name='movie_link9'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie10</label>
                    <textarea class="form-control mt-0" name='movie_link10'></textarea>
                </div>

            </div>

        </div>


        <!-- ボタン -->
        <div class="row mt-md-3 mt-0 text-center" >
                      
          <div class="col-md-12 my-md-4 mt-0">
              <div class="form-group">
                <input class="btn btn-dark form-control" type="submit" value="投稿する">
              </div>
            
          </div>


</form>
        </div>
    

</div>

<div class="w-100 text-center">
        <div class="col-12 p-0">
            <footer id="main-footer" class="bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col py-5">
                            <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1584966022/ya2txf4ws1ijgqaayadv.png" alt="" height="40"
                                width="40" class="footer-logo">
                            <h3 class="contact">NIKKI</h3>
                            <p class="contact">Copyright© 2020 Uoya Ryota </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
      </div>
@endsection
