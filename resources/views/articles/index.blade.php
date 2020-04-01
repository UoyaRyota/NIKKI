@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="mb-0 py-md-5 pb-2 pt-4 post-index-title">POST</h1>
    <hr>
</div>


<div class="container">

<div class="col-md-8 offset-md-2">



    <div class="row justify-content-center mb-4">

   
    
        <a href="articles/create" class="btn btn-dark">新規投稿</a>
    </div>
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
        <div class="col-6">
            <h2>
                <a href="{{ url('articles', $article->id) }}">
                    {{ $article->title }}
                </a>
                <img src="{{$article->image}}">
            </h2>
        </div>

        @endforeach



    </div>
</div>

</div>
</div>
</div>
</div>
@endsection
