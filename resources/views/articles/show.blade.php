@extends('layout')

@section('content')

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


<!-- 記事の内容 -->

<div class="container">

    <div class="row text-center">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-0 py-md-5 pb-4 pt-4 post-index-title">{{ $article->title }}</h1>
        </div>
    </div>
    <hr />

    <div class="row">


        <article>

            <!-- <label for="body">・タイトル</label>
            <div class="body">{{ $article->body }}</div> -->
            　　　　

            <img src="{{$article->image}}" width="250" height="250" class="home-profile-img">
            <div class="container my-auto">
                <div class="form-group mt-4">
                    　 <label for="img_url_1">投稿画像</label> <br>
                    <div class="form-group mt-4">
                    </div>
                </div>
            </div>
            <!-- <div>
                <img src="{{$article->image}}">
            </div> -->




            <!-- <label for="body">・学習動画</label>
        <div class="body">{{ $article->movie_link }}</div> -->

            <div class="form-group">
                <label for="body" class="mb-0 h4">・Comment</label>
                
                <br>
                {{ $article->comment }}
            </div>

            <div class="form-group">
                <label for="body" class="mb-0 h4">・Study Method</label>
                <br>
                {{ $article->method }}
            </div>

            <div class="form-group">
                <label for="body" class="mb-0 h4">・Phrase</label>
                <br>
                {{ $article->phrase }}
            </div>

            <div class="form-group">
                <label for="body" class="mb-0 h4">・Goal</label>
                <br>
                {{ $article->goal }}
            </div>



            <!-- <label for="body"></label>
            <div class="body">{{ $article->comment }}</div>

            <label for="body">・学習方法</label>
            <div class="body">{{ $article->method }}</div>

            <label for="body">・学習フレーズ</label>
            <div class="body">{{ $article->phrase }}</div>

            <label for="body">・ゴール</label>
            <div class="body">{{ $article->goal }}</div> -->

            <!-- <div>
                <img src="{{ asset('storage/image/' . $article->image) }}">
            </div> -->

        </article>

    </div>

    

    @if ($article->movie_link = null)
    <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585123691/xk4dbdfjm4xj2sfbbap8.jpg" width="250" height="250" class="home-profile-img">
    @endif


    <div class="col-md-6 my-md-auto mt-4">
        @isset($article->movie_link)
        <iframe width="560" height="315" src="{{ $article->movie_link }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link2)
        <iframe width="560" height="315" src="{{ $article->movie_link2 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link3)
        <iframe width="560" height="315" src="{{ $article->movie_link3 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link4)
        <iframe width="560" height="315" src="{{ $article->movie_link4 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link5)
        <iframe width="560" height="315" src="{{ $article->movie_link5 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link6)
        <iframe width="560" height="315" src="{{ $article->movie_link6 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link7)
        <iframe width="560" height="315" src="{{ $article->movie_link7 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link8)
        <iframe width="560" height="315" src="{{ $article->movie_link8 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link9)
        <iframe width="560" height="315" src="{{ $article->movie_link9 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link10)
        <iframe width="560" height="315" src="{{ $article->movie_link10 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset
    </div>

    <br />
    <div>

        <!-- ログイン時 -->

        <div class="row mt-md-3 mt-0 text-center">


            @auth
            <div class="col-md-8 my-md-4 mt-0 offset-md-2">
                <div class="form-group">
                    <a href="{{ action('ArticlesController@edit', [$article->id]) }}"
                        class="btn btn-dark form-control mb-2">編集</a>
                    <form action="{{ action('ArticlesController@destroy', [$article->id]) }}" method="POST">
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}

                        <div class=" text-center">
                            <input type="submit" class="btn btn-secondary form-control mb-2" value="削除">
                        </div>
                    </form>
                </div>
                @endauth

                @auth
                <form action="{{ action('LikeController@store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class=" text-center">
                        <input type="submit" class="btn btn-secondary form-control mb-2" value="お気に入り">
                    </div>
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <!-- <a href="{{ route('likes.store',['article_id'=> $article->id]) }}"class="btn btn-primary" >お気に入り</a> -->
                </form>
                @endauth
                <a href="{{ route('articles.index') }}" class="btn btn-secondary form-control mb-2 ">
                    一覧へ戻る
                </a>

            </div>
        </div>



    </div>



</div>

<div class="col-md-8 offset-md-2">

    <!-- 記事に対するコメント -->
    @foreach($article->comments as $comment)
    <div class="body">{{ $comment->body }}</div>
    <p class="text">投稿者：<a href="{{ route('users.show', [$comment->user_id]) }}">{{ $comment->user->name}}
        </a>
    </p>
    @endforeach
    <a href="{{ route('comments.create', ['article_id' => $article-> id]) }} "
        class="btn btn-dark form-control mb-5">コメントする</a>
</div>


<div class="w-100 text-center">
    <div class="col-12 p-0">
        <footer id="main-footer" class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col py-5">
                        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1584966022/ya2txf4ws1ijgqaayadv.png"
                            alt="" height="40" width="40" class="footer-logo">
                        <h3 class="contact">NIKKI</h3>
                        <p class="contact">Copyright© 2020 Uoya Ryota </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
