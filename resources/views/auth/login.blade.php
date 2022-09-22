@extends('layouts.main')
@section('page-tab-title', 'Login - VILLA.IO')
@section('content')
    <div class="auth-page auth-page--login">
        <form method="POST" action="{{ route('login') }}" class="auth-page__form">
            @csrf
            <h3 class="auth-page__header">
                <i class="fa-solid fa-user"></i>
                Login
            </h3>
            <div class="auth-page__form-group">
                <label for="email" class="auth-page__form-label">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                    class="auth-page__form-input" />
                @error('email')
                    <span class="error-sub-text" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="auth-page__form-group">
                <label for="password" class="auth-page__form-label">Password</label>
                <input type="password" name="password" id="password" required autocomplete="current-password"
                    class="auth-page__form-input" />
                @error('password')
                    <span class="error-sub-text" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="auth-page__form-group">
                    <label for="remember_me" class="auth-page__form-label">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="auth-page__form-group">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
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


{{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form> --}}
