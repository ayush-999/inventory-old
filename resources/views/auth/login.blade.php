@extends('layouts.master')

@section('title', 'Login')

@section('content')
<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            {{-- Logo --}}
            {{-- <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div> --}}

            <div class="card card-primary">
              <div class="card-header">
                <h4>{{ __('Login') }}</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf 
                  <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control" tabindex="1" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        {{-- <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> --}}
                        <div class="error-wrapper">
                          <span>{{ $message }}</span>
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">{{ __('Password') }}</label>
                      <div class="float-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-small">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <div class="error-wrapper">
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                  </div>

                  {{-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="remember-me">{{ __('Remember Me') }}</label>
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      {{ __('Login') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="{{ route('register') }}">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Inventory 
              <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
