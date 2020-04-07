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
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="row">
                  <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                  <div class="col-md-12">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row">
                  <label for="email" class="col-md-6 col-form-label ">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-12">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row">
                  <label for="password-confirm" class="col-md-6 col-form-label ">{{ __('Confirm Password') }}</label>

                  <div class="col-md-12">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="row mb-0">
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
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
