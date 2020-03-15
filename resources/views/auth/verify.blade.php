@extends('layouts.app')
@section('title', 'Verify Your Email')
@section('auth-header','Verify Your Email Address' )
@section('content')
    @parent
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
           <br /> You have limited access without Verification
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">


                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="GET" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-primary btn-block">{{ __('click here to resend') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="session-footer medium">
        However, You may proceed with Limited Access<br /> <a href="/home">Home</a>
    </div>
@endsection
