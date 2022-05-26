@extends('layouts.auth')
@section('title')
    Verify Email
@endsection
@section('css')
@endsection
@section('content')
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    @if (session('status'))
                        <span class="text-secondary">{{ session('status') }}</span>
                    @endif
                    <h2 class="form-title">Verify Email</h2>
                    <form action="{{ route('verification.send') }}" method="post" id="resend">
                        @csrf

                        <p>We sent you a verification mail. Please go to your mail box and verify your mail address. If you
                            did
                            not get mail, <u><a onclick="document.getElementById('resend').submit();"
                                    style="cursor:pointer; ">request for
                                    another.</a></u>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
