@extends('layouts.app')

@section('content')


   
<h1 class="text-center">Comment</h1>
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
  
  <div class="form-group text-center col-8 offset-md-2">
    <label for="post"></label>
    <textarea class="form-control-file" row="5" id ="body" name="body"></textarea>
  </div>


  <input type="hidden" name="user_id" value="{{ Auth::id()}}">
  <input type="hidden"  name="article_id" value="{{ $article_id }}">
  
  <div class=" text-center">
  <input type="submit" class="btn flat-border" value="作成">  
  </div>
</form>
@endsection