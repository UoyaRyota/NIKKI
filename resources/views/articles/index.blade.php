@extends('layouts.app')

@section('content')
<div class="index-image">
    <div class="container pt-5">
        <h1 class="title-message mb-0 py-md-5 pb-2 pt-4 text-center index-nikki-title">NIKKI</h1>
        <h2 class="title-message text-center"></h2>
        <h2 class="title-message  text-center">あなたのお気に入りの「フレーズ」をシェアしよう</h2>
        <div class="text-center mt-5">
            <a href="articles/create" class="submit-btn btn">NEW POST</a>
        </div>
        <br>
    </div>
</div>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10 text-center">
                <h3 class="text-lg font-bold my-5">新着の投稿</h3>
              
                <div class="row">
                    @foreach ($articles as $article)
                        @include('components.article-card')
                    @endforeach
                </div>
            </div>
        </div>
      


<!-- <div class="container">
    <div class="row">
        　 @if (Session::has('message'))
        　　　　　　 <p>{{ session('message') }}</p>
        　　　　　　@endif
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @foreach($articles as $article)
        <div class="col-md-3 mt-3 mb-4">
            <div class="card bg-white h-100 home-card">
                <div class="card-body bg-white">
                    <h2 class="card-title pt-2 home-card-title">
                        <div class="card-01 h-100 home-card">
                            <img src="{{$article->image}}" width="100%" height="300">
                        </div>
                        <a href="{{ url('articles', $article->id) }}" >
                            {{ $article->title }}
                        </a>
                </div>
                </h2>
            </div>
        </div>

     
        @endforeach



    </div>

</div> -->
</div>
</div>
</div>
@endsection
