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
<h1 class="text-center">プロフィール</h1>
     <hr/>
 
        
  <div class="form-group text-center">
    <label for="title">名前</label>
    <input type="text" class="name" name="name" value="{{Auth::user()->name}}">
  </div>


  <div>
<img src="{{Auth::user()->image_profile}}">
</div>

<input type="hidden"  name="password" value="{{ Auth::user()->password }}">
    
<div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_profile" >
  </div>
  


  <div class="form-group text-center">
    <label for="user_occupation">職業</label>
    <input type="occupation" class="occupation" name="occupation" value="{{Auth::user()->occupation}}">
  </div>

  <div class="form-group text-center">
    <label for="email">メール</label>
    <input type="email" class="email" name="email" value="{{Auth::user()->email}}">
  </div>

  <div class="form-group text-center">
    <label for="self_introduction">自己紹介</label>
    <input type="self_introduction" class="self_introduction" name="self_introduction" value="{{Auth::user()->self_introduction}}">
  </div>



  @foreach($articles as $article)
                    <article>
                        <h2>
                            <a href="{{ route('articles.show', [$article->id]) }}">
                                {{ $article->title }}
                            </a>
                        </h2>
                    </article>
  @endforeach

  @foreach($likes as $like)
                    <article>
                        <h2>
                        <a href="{{ route('articles.show', [$like->user_id]) }}">
                        {{dd($likes)}}
                                {{ $like->article->name}}
                            </a>
                        </h2>
                    </article>
  @endforeach


  
               

  <div class="form-group text-center">
  <a href="{{route('users.edit',[Auth::user()->id]  )}}">編集画面へ</a>
  


  

  
@endauth