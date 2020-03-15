@extends('layouts.dashboard-layout')

@section('content')

    @if (auth()->user()->hasRole('student'))



    @endif

    @if (auth()->user()->hasRole('marker'))

        <div class="user-selection marker-reg">
            <h1>Thank you for your interest in marking!</h1>
            <p>We will contact you by the mail provided on how to complete your registration and provide basic requirements that qualifies you to be a marker.</p>
            <div class="btns-holder">
                <a href="#" class="btn full">Check My Mail</a>
            </div>
        </div>

    @endif