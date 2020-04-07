@extends('layouts/main')

@section('title')
  Design Storm - Inspiration For Developers
@endsection

@section('content')
<div id="site-section">
  <div class="container">
    <div id="auth">
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
          <div class="box">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <label for="email" class="col-md-6 col-form-label ">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check">
                          <div class="col-xs-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          </div>
                            <label class="form-check-label" for="remember">
                              <div class="col-xs-8">
                                {{ __('Remember Me') }}
                              </div>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row mb-0">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Register a new account') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
