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
<h1 class="text-center">PROFILE EDIT</h1>
<hr />


<div class="container">
    <div class="col-md-8 offset-md-2">

        <form action="{{route('users.update', $user)}} " method="POST" enctype="multipart/form-data">
            @method('PATCH')
            {{ csrf_field( ) }}

            <div class="form-group">
                <label for="title">名前</label>
                <input type="text" class="form-control mt-0" name='name' value="{{$user->name}}">
            </div>

            <!-- あとで画像を送信する方法を確認する -->

            <div>
                <img src="{{$user->image_profile}}">
            </div>

            <input type="hidden" name="password" value="{{ $user->password }}">

            <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_profile">
            </div>


            <div class="form-group">
                <label for="user_occupation">職業</label>
                <input type="occupation" class="form-control mt-0" name='occupation' value="{{$user->occupation}}">
            </div>

            <div class="form-group">
                <label for="email">メール</label>
                <input type="text" class="form-control mt-0" name='email' value="{{$user->email}}">
            </div>

            <div class="form-group">
                <label for="self_introduction">自己紹介</label>
                <textarea rows="5" type="self_introduction" class="form-control mt-0"
                    name='self_introduction'>{{$user->self_introduction}}</textarea>
            </div>

            <div class=" text-center mt-5">
                <input type="submit" class="btn flat-border" value="編集する">



                <a href="{{route('articles.index')}}" class="btn flat-border ml-2">記事一覧へ</a>

        </form>
    </div>



    @endauth
    @endsection
