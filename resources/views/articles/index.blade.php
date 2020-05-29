@extends('layouts.app')

@section('content')
<div class="container mb-5">

    <h1 class="mb-0 py-md-5 pb-2 pt-4 post-index-title">POST　LIST</h1>
    <p class="mb-0">Post and share around what you've learned. make sure you post quality learning methods</p>
    <br>
    <p>a side from that I'm looking forward to meet your quality learning methods thank you.</p>

    <div class="row justify-content-center float-right mr-5">
        <a href="articles/create" class="btn flat-border">NEW POST</a>
    </div>
    <br>
    <hr>
</div>


<div class="container">



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
                            <img src="{{$article->image}}" width="100%" height="100%">
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

</div>
</div>
</div>
</div>
@endsection
