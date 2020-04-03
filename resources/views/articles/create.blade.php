@extends('layouts.app')

@section('content')

<!-- Left Side Of Navbar -->

<div class="container">
<form action="{{ route('articles.store', null, false) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field( ) }}


    <div class="row text-center">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-0 py-md-5 pb-4 pt-4 post-index-title">POST</h1>

        </div>
    </div>



        <div class="row col-10 offset-md-1">


            <!-- 左寄せ -->

            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="mb-0">Title</label>
                    <input type="text" class="form-control mt-0" name='title'>
                </div>

                <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585791772/logo_transparent_jj7tm2.png" width="250" height="250" class="home-profile-img">

                <div class="container my-auto">
                    <div class="form-group mt-4">
                        　 <label for="img_url_1">投稿画像</label> <br>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        <div class="form-group mt-4">
                        </div>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="comment" class="mb-0">Comment</label>
                    <input type="comment" class="form-control mt-0" name='comment'>
                </div>

                <div class="form-group">
                    <label for="method" class="mb-0">Study Method</label>
                    <textarea rows="10"  type="method" class="form-control mt-0" name='method'></textarea>
                </div>
                <p class="d-none d-md-block">※学習方法を記入してください。</p>

                <div class="form-group">
                    <label for="phrase" class="mb-0">Phrase</label>
                    <textarea rows="20" type="phrase" class="form-control mt-0" name='phrase'></textarea>
                </div>
                <p class="d-none d-md-block">※動画で使われているphraseをピックアップして記入してください。</p>

                <div class="form-group">
                    <label for="goal" class="mb-0">Goal</label>
                    <input type="goal" class="form-control mt-0" name='goal'>
                </div>

                
            </div>


            <!-- 右寄せ -->
            <div class="col-md-6 mt-4">
            <p class="d-none d-md-block">※動画のURLを貼り付ける方法はこちらをご参照ください。
            <button type="button" class="btn flat-border" data-toggle="modal" data-target="#modal1">
  説明を確認する
</button>
<div class="modal fade" id="modal1" tabindex="-1"
      role="dialog" aria-labelledby="label1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="label1">URLをコピペしよう</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb-3 mt-3">
        １　Youtubeの『共有ボタン』をクリック<br>
        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585727495/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-04-01_16.44.30_wloseb.png"
        width="100%" height="100%">

        ２　『埋め込む』をクリック<br>
        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585727496/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-04-01_16.44.43_zp31nu.png"
        width="100%" height="100%">

        ３　URLを画像の箇所のみコピペして貼り付ける
        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1585727505/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88_2020-04-01_16.45.22_a8lh8d.png"
        width="100%" height="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn flat-border" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            
            </p>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie1</label>
                    <textarea class="form-control mt-0" name='movie_link'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie2</label>
                    <textarea class="form-control mt-0" name='movie_link2'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie3</label>
                    <textarea class="form-control mt-0" name='movie_link3'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie4</label>
                    <textarea class="form-control mt-0" name='movie_link4'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie5</label>
                    <textarea class="form-control mt-0" name='movie_link5'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie6</label>
                    <textarea class="form-control mt-0" name='movie_link6'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie7</label>
                    <textarea class="form-control mt-0" name='movie_link7'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie8</label>
                    <textarea class="form-control mt-0" name='movie_link8'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie9</label>
                    <textarea class="form-control mt-0" name='movie_link9'></textarea>
                </div>

                <div class="form-group">
                    <label for="movie_link" class="mb-0">Movie10</label>
                    <textarea class="form-control mt-0" name='movie_link10'></textarea>
                </div>

            </div>

        </div>


        <!-- ボタン -->
        <div class="row mt-md-3 mt-0 text-center" >
                      
          <div class="col-md-12 my-md-4 mt-0">
              <div class="form-group">
                <input class="btn flat-border" type="submit" value="投稿する">
              </div>
            
          </div>


</form>
</div>

    

</div>
@endsection
