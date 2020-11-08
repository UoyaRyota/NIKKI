@extends('layouts.app')

@section('content')

<div class="container.my-lg-3 login-back-image" style="background: url(
    https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604719745/rgyepkcsmrs1rfhq4fiw.jpg
) 0pt -1000pt / cover rgba(255, 255, 255, 0.7); background-blend-mode: lighten;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="title-message text-center py-5">
                    <h1>{{ __('Login') }}</h1>
                    <h5 class=""> <br class="">フレーズ学習を使って<br>あなたの英語学習を少しお手伝いします。</h5></div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="title-message col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="title-message col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ml-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('次回から自動的にログイン') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="text-center mr-5">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('パスワードを忘れた方はこちら') }}
                            </a>
                        </div>
                        @endif

                        <div class="form-group row mb-0 ">
                            <div class=" text-center my-5 col-md-8 offset-md-3">
                                <button type="submit" class="submit-btn login-btn">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


