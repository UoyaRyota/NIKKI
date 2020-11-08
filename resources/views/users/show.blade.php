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
<div class="container mb-6">
    <h1 class="text-center py-5 mt-5 title-message">プロフィール</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2 mb-5">
            <div class="text-center">
                <img src="{{ isset($user->image_profile) ? $user->image_profile : 'https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604589833/wjenq69lvgivzbdeqkld.jpg' }}" class="prof-edit-image"  alt="画像は未設定です。">
            </div>
            <div class="mb-5">
                <input type="hidden" name="password" value="{{ Auth::user()->password }}" readonly>
            </div>
            
            <div class="form-group">
                <label for="title">名前</label>
                <input type="text" class="form-control mt-0" name="name" value="{{Auth::user()->name}}" readonly>
                </>
                <!-- <div class="form-group">
                    <label for="user_occupation">職業</label>
                    <input type="occupation" class="form-control mt-0" name="occupation"
                    value="{{Auth::user()->occupation}}" readonly>
                </div>
            -->
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
       
        <div class="text-center mt-6">
            <div class="form-group">
                <a href="{{route('users.edit',[Auth::user()->id]  )}}" class="submit-btn btn mt-5">編集画面へ</a>
            </div>
         
        </div>
    </div>
    
    <div class="article-post my-5">
        <h3 class="title-message text-center my-5">全ての投稿</h3>
        <div class="row">
                @foreach ($articles as $article)
                    @include('components.article-card')
                @endforeach
            </div>



        <div class="row mt-md-3 mt-0 text-center">




        </div>


    </div>






    @endauth
    @endsection
