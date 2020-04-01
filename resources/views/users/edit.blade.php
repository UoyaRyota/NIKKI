@extends('layout')
 
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
<h1 class="text-center">編集画面</h1>
     <hr/>

   

 <form action="{{route('users.update', $user)}} " method="POST"　 enctype="multipart/form-data">
        @method('PATCH')
        {{ csrf_field( ) }} 

  <div class="form-group text-center">
    <label for="title">名前</label>
    <input type="text" class="name" name='name' value="{{$user->name}}">
  </div>

<!-- あとで画像を送信する方法を確認する -->

<div>
<img src="{{$user->image_profile}}">
</div>

<input type="hidden"  name="password" value="{{ $user->password }}">
    
<div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_profile">
  </div>


  <div class="form-group text-center">
    <label for="user_occupation">職業</label>
    <input type="occupation" class="occupation" name='occupation' value="{{$user->occupation}}">
  </div>

  <div class="form-group text-center">
    <label for="email">メール</label>
    <input type="email" class="email" name='email' value="{{$user->email}}" >
  </div>

  <div class="form-group text-center">
    <label for="self_introduction">自己紹介</label>
    <input type="self_introduction" class="self_introduction" name='self_introduction' value="{{$user->self_introduction}}">
  </div>

  <div class=" text-center">
  <input type="submit" class="btn" value="編集する">  

   

  <a href ="{{route('articles.index')}}">記事一覧へ</a>

</form>
  

  
@endauth