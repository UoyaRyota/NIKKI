@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@auth

<div class="container">


    <h1 class="text-center">PROFILE</h1>

    <hr />

    <div class="row col6 offset-md-1">

        <div class="col-md-6">
            <div class="form-group">
                <label for="title">名前</label>
                <input type="text" class="form-control mt-0" name="name" value="{{Auth::user()->name}}" readonly>
            </div>


            <div>
                <img src="{{Auth::user()->image_profile}}" height=300 width=300>
            </div>
            <div class="mb-5">
                <input type="hidden" name="password" value="{{ Auth::user()->password }}" readonly>
            </div>



            <div class="form-group">
                <label for="user_occupation">職業</label>
                <input type="occupation" class="form-control mt-0" name="occupation"
                    value="{{Auth::user()->occupation}}" readonly>
            </div>

            <div class="form-group">
                <label for="email">メール</label>
                <input type="email" class="form-control mt-0" name="email" value="{{Auth::user()->email}}" readonly>
            </div>

            <div class="form-group">
                <label for="self_introduction">自己紹介</label>
                <textarea rows="5" type="self_introduction" class="form-control mt-0" name="self_introduction"
                    readonly>{{Auth::user()->self_introduction}}</textarea>
            </div>
        </div>


        <div class="col-md-6 mt-5">
            <h3>POST　リスト</h3>
            @foreach($articles as $article)
            <article>
                <h2 class="postlist-title">
                    <a href="{{ route('articles.show', [$article->id]) }}">
                        ・{{ $article->title }}
                    </a>
                </h2>
            </article>
            @endforeach
        </div>




        <div class="row mt-md-3 mt-0 text-center">




        </div>
        <div class="col-md-8 my-md-4 mt-0 offset-md-2">
            <div class="form-group">
                <a href="{{route('users.edit',[Auth::user()->id]  )}}" class="btn flat-border">編集画面へ</a>
            </div>

        </div>


    </div>






    @endauth
    @endsection
