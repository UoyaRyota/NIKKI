@extends('layouts.app')

@section('content')

<!-- 記事の内容 -->

<div class="container">

    <div class="row text-center">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-0 py-md-5 pb-4 pt-4 post-index-title">{{ $article->title }}</h1>
        </div>
    </div>
    <hr />

    <div class="row">

    <div class="col-md-4">


        <article>

            <!-- <label for="body">・タイトル</label>
            <div class="body">{{ $article->body }}</div> -->
            　　　　

            <img src="{{$article->image}}" width="250" height="250" class="home-profile-img">
            <div class="container my-auto">
                <div class="form-group mt-4 ml-5">
                    　 <label for="img_url_1">post picture</label> <br>
                    <div class="form-group mt-4">
                    </div>
                </div>
            </div>
            <!-- <div>
                <img src="{{$article->image}}">
            </div> -->




            <!-- <label for="body">・学習動画</label>
        <div class="body">{{ $article->movie_link }}</div> -->

            <div class="form-group ml-5">
                <label for="body" class="mb-0 h4">・Comment</label>
                
                <br>
                {{ $article->comment }}
            </div>

            <div class="form-group ml-5">
                <label for="body" class="mb-0 h4">・Study Method</label>
                <br>
                {{ $article->method }}
            </div>

            <div class="form-group ml-5">
                <label for="body" class="mb-0 h4">・Phrase</label>
                <br>
                {{ $article->phrase }}
            </div>

            <div class="form-group ml-5">
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

        @auth
            <div class="row mt-5">
    
                <form action="{{ action('ArticlesController@destroy', [$article->id]) }}" method="POST">
                    <a href="{{ action('ArticlesController@edit', [$article->id]) }}"
                        class="btn flat-border mb-2 ml-2">編集</a>
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}
                            <input type="submit" class="btn flat-border mb-2 mr-4" value="削除">
                    </form>
                
                <form action="{{ action('LikeController@store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <!-- <a href="{{ route('likes.store',['article_id'=> $article->id]) }}"class="btn btn-primary" >お気に入り</a> -->
                </form>
                @endauth
                <a href="{{ route('articles.index') }}" class="btn flat-border  mb-2 ">
                    一覧へ戻る
                </a>

            </div>
        </div>

    

    



    <div class="col-md-4 my-md-auto mt-4">
        @isset($article->movie_link)
        <iframe width="300" height="200" src="{{ $article->movie_link }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link2)
        <iframe width="300" height="200" src="{{ $article->movie_link2 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link3)
        <iframe width="300" height="200" src="{{ $article->movie_link3 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link4)
        <iframe width="300" height="200" src="{{ $article->movie_link4 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link5)
        <iframe width="300" height="200" src="{{ $article->movie_link5 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset
        </div>

        <div class="col-md-4 my-md-auto mt-4">
        @isset($article->movie_link6)
        <iframe width="300" height="200" src="{{ $article->movie_link6 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link7)
        <iframe width="300" height="200" src="{{ $article->movie_link7 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link8)
        <iframe width="300" height="200" src="{{ $article->movie_link8 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link9)
        <iframe width="300" height="200" src="{{ $article->movie_link9 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset

        @isset($article->movie_link10)
        <iframe width="300" height="200" src="{{ $article->movie_link10 }}" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endisset
        </div>
    </div>
    </div>

    <br />
    <div>

        <!-- ログイン時 -->

    
    </div>



</div>

<div class="container">
<div class="row">

    <!-- 記事に対するコメント -->
    @foreach($article->comments as $comment)
    <div class="col-md-3 mt-3 mb-4">
    <div class="body">{{ $comment->body }}</div>
    <p class="text">投稿者：<a href="{{ route('users.show', [$comment->user_id]) }}">{{ $comment->user->name}}
        </a>
    </p>
</div>
    @endforeach
</div>
</div>

<div class="row">
    <div class="col-12">
<a href="{{ route('comments.create', ['article_id' => $article-> id]) }} "
        class="btn flat-border  offset-5 mt-5 mb-5">コメントする</a>
</div>
</div>
@endsection
