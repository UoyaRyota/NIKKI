<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NIkki</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-sm navbar-white bg-white sticky-top">
    <a class="navbar-brand ml-3" href="#">
      <img src="ZFYdrT9rCnE9mcj6Lsh1Mt7bMDYHDLefhGr9qlJt.png" class="logo mr-2">
    <h3 class="d-inline align-middle logo-text">NIKKI</h3>
    </a>
    <div class="navbar-nav ml-auto">
      <a href="https://japanglish.herokuapp.com/login"><button class="btn btn-outline-blue mr-3 d-none d-sm-inline-block " type="button">ログイン</button></a>
      <a href="https://japanglish.herokuapp.com/register"><button class="btn btn-outline-orange mr-3 d-none d-sm-inline-block" type="button">新規会員登録</button></a>
    </div>
  </nav>

  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner container py-5">
        <div class="row">
          <div class="col text-center">
          <h3 class="text-center mb-0">Share personally created albums.</h3>
          <h1 class="text-center my-md-5 my-3 lp-home-title">『From person to person』</h1>
          
          <!-- <br class="d-none d-sm-block"> -->

          <a href="https://japanglish.herokuapp.com/login">
            <button class="btn lp-btn btn-outline-light mt-md-2 btn-size" type="button">ログイン</button>
          </a><br>
          <a href="https://japanglish.herokuapp.com/register">
            <button class="btn lp-btn btn-outline-light mt-2 btn-size" type="button">新規会員登録</button>
          </a><br>
          </div>
        </div>
      </div>
  </div>
</header>


<section id="feature-section">
<div class="container">
  <h1 class="title-feature text-center pt-md-5 pt-3">Feature</h1>

  <div class="row">
    <div class="col-md-4 col-sm-6 mb-md-4">
      <div class="item-boxes wow fadeInDown text-center p-4" data-wow-delay="0.2s">
        <div class="icon">
          <i class="fas fa-pencil-alt"></i>
        </div>
        <h4 class="lp-feature-topic">1.英語のフレーズを動画で学習</h4>
        <p>英語学習における日常生活で実用可能なフレーズを動画を簡単に確認できるアプリケーションです。</p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 mb-md-4">
      <div class="item-boxes wow fadeInDown text-center p-4" data-wow-delay="0.4s">
        <div class="icon">
          <i class="fas fa-chart-bar"></i>
        </div>
        <h4 class="lp-feature-topic">２. アルバム作成</h4>
        <p>短い動画を一つのアルバムにまとめてフレーズ集を作ることが可能です</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-md-4">
      <div class="item-boxes wow fadeInDown text-center p-4" data-wow-delay="0.6s">
        <div class="icon">
          <i class="fas fa-search"></i>
        </div>
        <h4 class="lp-feature-topic">３. 動画に要約が記載</h4>
        <p>投稿者がまとめた動画には要約が書かれています。時間が無い時も要約を確認しスキマ時間で学習できます。</p>
      </div>
    </div>
    
  </div>
</div>
</section>


<section id="how">
  <div class="container">
      <h1 class="title-feature text-center pt-md-5 pt-3">Using</h1>
      <h3 class="mb-0 text-center pb-md-5 pb-3">使い方</h3>

    <div class="row pb-md-5 pb-3">
      <div class="col-md-4 mt-3 mb-4">
          <div class="card h-100 home-card">
              <img src="/Users/uotaniryouta/dev/nikki/public/storage/image/zIs036qpUGu11w3ry4fRn62a8xQMMA6CGo6LeYUL.jpeg" class="card-img-lp">
              <div class="card-body">
                  <h3 class="card-title home-card-title">1. 英会話に必要なフレーズ集を動画で確認しましょう</h3>
                  <p class="card-text">自分が気になるユーザのフレーズ集をクリックし要約に書いてある内容を確認して見ましょう。気になるユーザーはお気に入り登録をしましょう。</p><p></p>
              </div>
          </div>
      </div>
      <div class="col-md-4 mt-3 mb-4">
          <div class="card h-100 home-card">
              <img src="ZGFpimnWRqgErJcSYckJPKMtBSfpwyiqBdCDrfey.jpeg" class="card-img-lp">
              <div class="card-body">
                  <h3 class="card-title home-card-title">2. 投稿してみましょう。</h3>
                  <p class="card-text">POST機能を使ってあなたが紹介した動画や分かりやすい要約を周りにシェアして見ましょう。より良い情報を提供することで多くの方に見てもらえます。</p>
              </div>
          </div>
      </div>
    </div>
</div></section>

<section id="message">
  <div class="dark-overlay d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col text-center pt-md-5 pt-3">
          <h3 class="title-message">英会話が上達しないあなたへ</h3>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p class="text-center pb-md-5 mb-md-0">日常生活で必要な英語フレーズ集をまとめました。<br>
          私が英語を話せる様になりたいと思い、多くのブログサイトやyoutubeを確認し、<br>
            
          英会話を簡単に話せる様になる一番の最初のステップでは無いかと考えています。<br>
          海外の留学経験も踏まえ上で、英語のフレーズを覚えることが<br>
            
          『早速英語の勉強頑張るぞ！』とフレーズ集を検索するも動画の種類が多く時間が長い動画や短い動画が多くあり<br>
          『どの動画を選んで学習すれば簡単な英会話ができる様になるんだろう？』<br>
          っと悩む事が多く動画を選ぶ時間が長くモチベーションが下がっていました。<br>

          NIKKIでは上記の悩みを解決するため<br>
          ①アルバムの作成<br>
          ②要約機能<br>
          を①を使い短い動画はフレーズが少ないためいくつかの動画をアルバムにまとめ<br>
          ②を使うことで長い動画は要約を確認する事で短い時間で長い動画の内容を把握でき、<br>
          動画選択に浪費する時間と日常生活に必要なフレーズを取捨選択する時間を節約する事ができます。<br>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="get-start">
  <div class="container">
    <div class="row">
      <div class="col text-center pt-5 pb-5">
        <a href="https://japanglish.herokuapp.com/register"><button class="btn btn-outline-orange mt-2 btn-size" type="button">Start</button></a>
        <p class="text-center">NIKKI is an application to share recommended videos.</p>
        <a href="https://japanglish.herokuapp.com/register"><button class="btn btn-outline-orange mt-2 btn-size" type="button">sing up</button></a>

      </div>
    </div>
  </div>
<section>

  <div class="w-100">
  <div class="col-12 p-0">
  <footer id="main-footer" class="bg-orange">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <img src="https://japanglish.herokuapp.com/image/revertedLogo.jpeg" alt="" height="40" width="40" class="footer-logo">
          <h3 class="contact">NIKKI</h3>
          <p class="contact">NIKKI© Ryota </p>
                  </div>
      </div>
    </div>
  </footer>
  </div>
</div>  <!-- bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</section></section>




        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/articles') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
