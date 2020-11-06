@extends('layouts.app')

@section('content')

<body>

    <header id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container py-5">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="text-center mb-0 title-message">Share personally created albums.</h3>
                        <h1 class="text-center my-md-5 my-3 lp-home-title title-message">『From person to person』</h1>

                        <!-- <br class="d-none d-sm-block"> -->
                        <!-- http://nikki-eigo-app.herokuapp.com/login -->

                        <a href="">
                            <button class="btn lp-btn btn-outline-light mt-md-2 btn-size" type="button">ログイン</button>
                        </a><br>
                        <a href="">
                            <button class="btn lp-btn btn-outline-light mt-2 btn-size" type="button">新規会員登録</button>
                        </a><br>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="feature-section ">
        <div class=".down-to-top container">
            <h1 class="title-feature text-center pt-md-5  mt-5">Feature</h1>

            <div class="row mb-5">
                <div class="col-md-4 col-sm-6 mb-md-4 mt-1card shadow transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-10">
                    <div class="item-boxes wow fadeInDown text-center " data-wow-delay="0.2s">
                        <div class="icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <h4 class="lp-feature-topic ">1.英語のフレーズを動画で学習</h4>
                        <p>英語学習における日常生活で実用可能なフレーズを動画を簡単に確認できるアプリケーションです。</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-md-4">
                    <div class="item-boxes wow fadeInDown text-center " data-wow-delay="0.4s">
                        <div class="icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4 class="lp-feature-topic">２. YouTubeから共有</h4>
                        <p>あなたが気に入った動画YouTubeから共有することができます。</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-4">
                    <div class="item-boxes wow fadeInDown text-center " data-wow-delay="0.6s">
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


    <section class="how-to-use">
        <div class="container clear">
            <h3 class="title-feature text-center pt-md-5 pt-3 mb-5">HOW TO USE</h3>
            <div class="row">
                <div class="col-md-6 mb-6">
                    <div class="item-boxes">
                        <h3 class="card-title home-card-title">1. 英会話に必要なフレーズ集を動画で確認しましょう</h3>
                        <p class="card-text">自分が気になるユーザのフレーズ集をクリックし要約に書いてある内容を確認して見ましょう。気になるユーザーはお気に入り登録をしましょう。</p>
                        <p></p>
                    </div>
                </div>
                <div class="img-wrap col-md-6">
                        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604589833/wjenq69lvgivzbdeqkld.jpg"
                        class="lp-photo rounded shadow p-3 mb-5">
                        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604410811/tbiy86ltjoyiwqbrajxk.jpg"
                        class="lp-photo rounded shadow p-3 mb-5">
                </div>

                
            </div>
        </div>
    </section>
    
    <section class="how-to-use2 mt-6">
        <div class="container clear">
            <div class="row">
                <div class="img-wrap2 col-md-6 mt-5">
                    <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604589368/awb8sd9uwoclgujwczqn.jpg"
                        class="lp-photo rounded shadow p-3 mb-5">
                        <img src="https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604411064/m8l3v1qvatzewkilqk80.jpg"
                        class="lp-photo rounded shadow p-3 mb-5 ">
            
                </div>
            
                <div class="col-6 mt-6">
                    <div class="item-boxes">
                        <h3 class="card-title home-card-title">2. 投稿してみましょう。</h3>
                        <p class="card-text">POST機能を使ってあなたが紹介した動画や分かりやすい要約を周りにシェアして見ましょう。より良い情報を提供することで多くの方に見てもらえます。</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="message" class="section-message">
        <div class="dark-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center pt-md-5 pt-3">
                        <h2 class="title-message float-left">英会話が上達しないあなたへ</h2>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 float-left">
                        <h4 class="title-message text-center pb-md-5 mb-md-0">フレーズを覚えて英語を話す。<br>
                            <br>
                            <br>
                            学習時間の短縮<br>
                            <br>
                            知識をアウトプット<br>
                            <br>
                            学習方法をシェア<br>
                            <br>
                            <br>
                            さあ、一緒にはじめよう
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </>

    <section id="get-start">
        <div class="container submit">
            <div class="row">
                <div class="col text-center pt-5 pb-5">
                    <h2 class="text-center mb-4">Let's do something！！</h2>
                    <p class="mr-3 mb-3">-新規登録して投稿してみよう-</p>
                    <a href="http://127.0.0.1:8000/register"><button class="submit-btn mr-4"
                            type="button">新規登録</button></a>
                </div>
            </div>
        </div>
        <section>

        <p id="page-top"><a href="#wrap">PAGE TOP</a></p>



            </div> <!-- bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
                <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
                <script>$(function(){
                $(window).scroll(function (){
                    $('.left-to-right, .down-to-top').each(function(){
                        var elemPos = $(this).offset().top;
                        var scroll = $(window).scrollTop();
                        var windowHeight = $(window).height();
                        if (scroll > elemPos - windowHeight + 150){
                            $(this).addClass('scrollin');
                        }
                    });
                });
});</script>


<script> $('.img-wrap img:nth-child(n+2)').hide();
      setInterval(function() {
        $(".img-wrap img:first-child").fadeOut(2000);
        $(".img-wrap img:nth-child(2)").fadeIn(2000);
        $(".img-wrap img:first-child").appendTo(".img-wrap");
      }, 4000);</script>

<script> $('.img-wrap2 img:nth-child(n+2)').hide();
      setInterval(function() {
        $(".img-wrap2 img:first-child").fadeOut(2000);
        $(".img-wrap2 img:nth-child(2)").fadeIn(2000);
        $(".img-wrap2 img:first-child").appendTo(".img-wrap2");
      }, 4000);</script>



<script>$(function() {
    var topBtn = $('#page-top');    
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>





        </section>
    </section>

    @endsection
