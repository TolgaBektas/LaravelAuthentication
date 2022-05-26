@extends('layouts.auth')
@section('title')
    Login
@endsection
@section('css')
@endsection
@section('content')
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-form">
                    @if (session('status'))
                        <span class="text-secondary">{{ session('status') }}</span>
                    @endif
                    <h2 class="form-title">Sign in</h2>
                    <form method="POST" class="register-form" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>

                            <input type="email" name="email" id="email" placeholder="Your email address" autocomplete="off"
                                value="{{ old('email') }}" />
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye-off toggle-password field-icon"></span>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <input type="checkbox" name="remember_me" id="remember_me" class="agree-term" />
                            <label for="remember_me" class="label-agree-term"><span><span></span></span>Remember
                                me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>
                    {{-- <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div> --}}
                    <a href="{{ route('register') }}" class="signup-image-link">Register</a>
                    <a href="{{ route('password.request') }}" class="signup-image-link">Forgot password?</a>
                </div>
            </div>
        </div>
    </section>
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("zmdi-eye");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endsection
@endsection
