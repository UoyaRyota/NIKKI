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
<h1 class="text-center title-message text-center py-5 mt-5">プロフィールを編集</h1>
<div class="container">
    <div class="col-md-8 offset-md-2">

        <form action="{{route('users.update', $user)}} " method="POST" enctype="multipart/form-data">
            @method('PATCH')
            {{ csrf_field( ) }}
            <div class="prof-edit">
                <img src="{{ isset($user->image_profile) ? $user->image_profile : 'https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604589833/wjenq69lvgivzbdeqkld.jpg' }}" class="prof-edit-image"  alt="画像は未設定です。">
            </div>
            <div class="form-group mt-5">
                <label for="exampleFormControlFile1"></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_profile">
            </div>

            <input type="hidden" name="password" value="{{ $user->password }}">


            <div class="form-group">
                <label for="title">名前</label>
                <input type="text" class="form-control mt-0" name='name' value="{{$user->name}}">
            </div>

            <!-- <div class="form-group">
                <label for="user_occupation">職業</label>
                <input type="occupation" class="form-control mt-0" name='occupation' value="{{$user->occupation}}">
            </div> -->

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
                <input type="submit" class="submit-btn btn" value="編集する">

                <a href="{{route('articles.index')}}" class="submit-btn btn ml-2">記事一覧へ</a>

        </form>
    </div>



    @endauth
    @endsection
