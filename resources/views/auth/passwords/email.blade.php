@extends('layouts.app')
@section('title', 'Request Password Reset')
@section('auth-header',' Reset your account' )
@section('content')
    @parent


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-center">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" placeholder="Enter Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>


                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Request Password Reset') }}
                                </button>

                        <div class="terms-text">Password reset instructions will be sent to your registered email address.</div>

                    </form>

    <div class="session-footer">
    Remember password? <a href="/login">Log In</a>
    </div>



@endsection
