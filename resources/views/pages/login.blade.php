@extends('layouts.main')
@section('page-tab-title', 'Login - VILLA.IO')
@section('content')
    <div class="auth-page auth-page--login">
        <form action="" method="POST" class="auth-page__form">
            <h3 class="auth-page__header">
                <i class="fa-solid fa-user"></i>
                Login
            </h3>
            <div class="auth-page__form-group">
                <label for="email" class="auth-page__form-label">Email</label>
                <input type="email" name="email" id="email" class="auth-page__form-input" />
            </div>
            <div class="auth-page__form-group">
                <label for="password" class="auth-page__form-label">Password</label>
                <input type="password" name="password" id="password" class="auth-page__form-input" />
            </div>
            <div class="auth-page__form-group">
                <input type="submit" value="Login" class="auth-page__form-submit" />
            </div>
            <div class="auth-page__form-group">
                <a href="{{ route('register') }}" class="auth-page__form-register">Don't have an account? Register</a>
            </div>
        </form>
    </div>
@endsection
