@extends('layouts.auth')
@section('title')
    Reset Password
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
                    <h2 class="form-title">Reset Password</h2>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"
                                value="{{ old('email') }}" />
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group form-button">
                            <input type="submit" class="form-submit" value="Send Password Reset Link " />
                        </div>
                        <a href="{{ route('login') }}" class="signup-image-link">Login</a>
                        <a href="{{ route('register') }}" class="signup-image-link">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
