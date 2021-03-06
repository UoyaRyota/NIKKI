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

<div class="row text-center">
    <div class="col-md-8 offset-md-2">
        <h1 class="mb-0 py-md-5 pb-4 pt-4 post-index-title">編集画面</h1>
    </div>
</div>
<hr />

<div class="container">
    <form action="{{route('articles.update', $article)}} " method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-4">
                @method('PATCH')
                {{ csrf_field( ) }}


                <div class="col-md-12">

                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" value="{{ $article -> title}}" class="form-control mt-2 mb-2" name="title">
                    </div>

                    <div class="form-group text-center">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>


                    <div class="form-group text-center">

                        <div class="form-group">
                            <label for="comment" class="float-left">Comment</label>
                            <input type="text" value="{{$article -> comment}}" class="form-control mt-2 mb-4"
                                name="comment">
                        </div>

                        <div class="form-group">
                            <label for="method" class="float-left">学習方法</label>
                            <textarea rows="10" type="text" value="{{$article -> method}}"
                                class="form-control mt-2 mb-4" name="method"></textarea>

                        </div>

                        <div class="form-group ">
                            <label for="phrase" class="float-left">フレーズ</label>
                            <textarea rows="20" type="text" value="{{$article -> phrase}}"
                                class="form-control mt-2 mb-4" name="phrase"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="goal" class="float-left">目標</label>
                            <input type="text" value="{{$article -> goal}}" class="form-control mt-2 mb-4" name="goal">

                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-4 my-md-auto mt-4">

                <div class="form-group">
                    <label for="movie_link">動画</label>
                    <input type="text" value="{{$article -> movie_link}} " class="form-control mt-0" name="movie_link">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset



                <div class="form-group">
                    <label for="movie_link2">動画2</label>
                    <input type="text" value="{{$article -> movie_link2}} " class="form-control mt-0"
                        name="movie_link2">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link2 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset


                <div class="form-group">
                    <label for="movie_link3">動画3</label>
                    <input type="text" value="{{$article -> movie_link3}} " class="form-control mt-0"
                        name="movie_link3">
                </div>

                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link3 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset


                <div class="form-group">
                    <label for="movie_link4">動画4</label>
                    <input type="text" value="{{$article -> movie_link4}} " class="form-control mt-0"
                        name="movie_link4">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link4 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset


                <div class="form-group">
                    <label for="movie_link5">動画5</label>
                    <input type="text" value="{{$article -> movie_link5}} " class="form-control mt-0"
                        name="movie_link5">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link5 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset
            </div>

            <div class="col-md-4 my-md-auto mt-4">

                <div class="form-group">
                    <label for="movie_link6">動画6</label>
                    <input type="text" value="{{$article -> movie_link6}} " class="form-control mt-0"
                        name="movie_link6">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link6 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset


                <div class="form-group">
                    <label for="movie_link7">動画7</label>
                    <input type="text" value="{{$article -> movie_link7}} " class="form-control mt-0"
                        name="movie_link7">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link7 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset


                <div class="form-group">
                    <label for="movie_link8">動画8</label>
                    <input type="text" value="{{$article -> movie_link8}} " class="form-control mt-0"
                        name="movie_link8">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link8 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset



                <div class="form-group">
                    <label for="movie_link9">動画9</label>
                    <input type="text" value="{{$article -> movie_link9}} " class="form-control mt-0"
                        name="movie_link9">
                </div>
                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link9 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset



                <div class="form-group">
                    <label for="movie_link10">動画10</label>
                    <input type="text" value="{{$article -> movie_link10}} " class="form-control mt-0"
                        name="movie_link10">
                </div>

                @isset($article->movie_link)
                <iframe width="300" height="200" src="{{ $article->movie_link10 }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                @endisset

            </div>

        </div>


        <div class="row offset-md-5 mt-5">
            <input type="submit" class="btn flat-border" value="編集する">
        </div>


</div>

</form>

</div>


@endsection
