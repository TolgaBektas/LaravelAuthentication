@extends('layouts.auth')
@section('title')
    Home Page
@endsection
@section('css')
@endsection
@section('content')
    <section class="container">
        <div class="signup-content">
            <div class="signup-form">
                @auth
                    <h2>Welcome, {{ auth()->user()->name }}</h2>
                    <h4>You are logged in!</h4>
                    <form action="{{ route('logout') }}" id="logout" method="POST">
                        @csrf
                        <input type="submit" class="form-submit" value="Logout"></input>
                    </form>
                @endauth
                <a href="{{ route('login') }}" class="signup-image-link">Login</a>
                <a href="{{ route('register') }}" class="signup-image-link">Register</a>
            </div>
        </div>
    </section>
@endsection
