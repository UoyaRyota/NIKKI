@extends('layout')

@section('content')


   
<h1 class="text-center">投稿する</h1>
     <hr/>
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('comments.store') }}" method="POST">
        {{ csrf_field( ) }}
  
  <div class="form-group text-center">
    <label for="post"></label>
    <textarea class="form-contarol" row="5" id ="body" name="body"></textarea>
  </div>


  <input type="hidden" name="user_id" value="{{ Auth::id()}}">
  <input type="hidden"  name="article_id" value="{{ $article_id }}">
  
  <div class=" text-center">
  <input type="submit" class="btn" value="作成">  
  </div>
</form>
@endsection