@extends('layouts.app')

@section('content')
<div class="container" style="font-family: var(--font-latin-hero);">
    <div class="row justify-content-center">
        <div class="col-md-12 py-3">
          <div class="col-md-12 card"style=" height:400px; ">
            <div class="row">
              <div class="col-md-6 " style="height: 400px; ">
                  <div class="card-body col-md-12">
                    <div class="card-title" ><h3>持っているスキルをトレードする</h3></div>
                    <div class="d-flex align-items-center" style="height:300px;">
                        <div>
                            <p class="mt-3"><b>あなたの当たり前に出来る事は他の人にとって重要な事かもしれません</b></p>
                            <p class="mt-3"><b>また、自分のスキルを人に教えていると自分自身の理解度も高まります</b></p>
                            <p class="mt-3"><b>自分が挑戦したい領域の人とマッチングしましょう！</b></p>
                        </div>
                    </div>
                  </div>
              </div>
              <!-- スクリーンセーバー -->
              <div class="col-md-6" style="height: 500px;">
                <div class="card-body">
                    <div class="card-title" ><h3>あなたの教えられるスキル</h3></div>
                    <p class="mt-5" style="font-size: 21px;">
                    <button type="button" class="btn btn-primary rounded-pill">Photoshop</button>
                    <button type="button" class="btn btn-primary rounded-pill">エクセル</button>
                    <button type="button" class="btn btn-primary rounded-pill">Premire Pro</button>
                    <button type="button" class="btn btn-primary rounded-pill">Google App Script</button>
                  </p>
                    <div class="mx-auto" style="width:116px;height:116px;margin:0 auto;">
                      <img src="https://s3.amazonaws.com/optionalphafiles/wp-content/uploads/2015/06/15190517/Arrows-56.png" style="width: 116px;"/>
                    </div>
                    <p class="text-right mt-3" style="font-size: 21px;">
                    <button type="button" class="btn btn-primary rounded-pill">Laravel</button>
                    <button type="button" class="btn btn-primary rounded-pill">Flutter</button>
                    <button type="button" class="btn btn-primary rounded-pill">Unity</button>
                    <button type="button" class="btn btn-primary rounded-pill">Blender</button>
                    <button type="button" class="btn btn-primary rounded-pill">数学</button>
                    <button type="button" class="btn btn-primary rounded-pill">英語</button>
                    <button type="button" class="btn btn-primary rounded-pill mt-3">マインドフルネス</button>
                    </p>
                    <p class="text-right mt-5"><b>あなたの欲しいスキルを交換しませんか？</b></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div class="row row col-md-12">
            <a class="btn btn-block btn-social btn-twitter text-center " href="http://localhost:80/auth/twitter">
              <span class="fab fa-twitter"></span>Twitterでログイン</a>
            <a class="btn btn-block btn-social text-center btn-google mt-5" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
              <span class="fab fa-google"></span> Sign in with Google
            </a>
            <a class="btn btn-block btn-social text-center btn-facebook mt-5" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
              <span class="fab fa-facebook"></span> Sign in with Facebook
            </a>
          </div>

        </div>
    </div>
</div>
@endsection
