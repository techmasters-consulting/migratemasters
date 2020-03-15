

@extends('layouts.app')
@section('title', 'Login to')
@section('auth-header','Login to your account' )
@section('content')
    @parent




    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="with-icon">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                <a href="#" class="show-password">
                    <img src="images/icons/eye.svg" alt="">
                </a>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="d-flex align-items-center remember">
            <div class="checkbox-radio">
                <div class="inner">



                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label  for="remember">
                        {{ __('Remember Me') }}
                    </label>


                </div>
            </div>



            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block tra-white-hover">Login</button>

    </form>

    <div class="or-container">
        <span>or</span>
    </div>

    <div class="social-login">
        <a href="{{url('/auth/redirect/google')}}">
            <span class="img"><img src="images/social/google.svg" alt=""></span>
            <span>Sign in with Google</span>
        </a>

        <a href="{{url('/auth/redirect/facebook')}}">
            <span class="img"><img src="images/social/fb.svg" alt=""></span>
            <span>Sign in with Facebook</span>
        </a>

    </div>


    <div class="session-footer medium">
        Don’t have an account? <a href="/">Start by requesting Consultation</a>
    </div>

@endsection


