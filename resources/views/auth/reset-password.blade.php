@extends('layouts.auth')
@section('title')
    Reset Password
@endsection
@section('css')
@endsection
@section('content')
    <section class="container">
        <div class="signup-content">
            <div class="signup-form">
                @if (session('status'))
                    <span class="text-secondary">{{ session('status') }}</span>
                @endif
                <h2>Reset Password</h2>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <!-- Email input -->
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" />
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- Password input -->
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Your new password" />
                        <span toggle="#password" class="zmdi zmdi-eye-off toggle-password field-icon"></span>

                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- Password Confirmation input -->
                    <div class="form-group">
                        <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Repeat your password" />
                        <span toggle="#password_confirmation" class="zmdi zmdi-eye-off toggle-password2 field-icon"></span>

                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group form-button">
                        <input type="submit" class="form-submit" value="Reset Password" />
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
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
        $(".toggle-password2").click(function() {

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
