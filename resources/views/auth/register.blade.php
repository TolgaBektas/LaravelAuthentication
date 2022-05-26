@extends('layouts.auth')
@section('title')
    Register
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
                    <h2 class="form-title">Register</h2>
                    <form method="POST" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" />
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"
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
                            <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Repeat your password" />
                            <span toggle="#password_confirmation"
                                class="zmdi zmdi-eye-off toggle-password2 field-icon"></span>

                        </div>
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group form-button">
                            <input type="submit" name="register" id="register" class="form-submit" value="Register" />
                        </div>
                    </form>
                    <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>

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
@endsection
