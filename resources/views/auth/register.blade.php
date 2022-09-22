@extends('layouts.main')
@section('page-tab-title', 'Login - VILLA.IO')
@section('content')
    <div class="auth-page auth-page--login">
        <form method="POST" action="{{ route('register') }}" class="auth-page__form">
            @csrf
            <h3 class="auth-page__header">
                <i class="fa-solid fa-user"></i>
                Register
            </h3>
            <div class="auth-page__form-group">
                <label for="name" class="auth-page__form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"" required autofocus
                    class="auth-page__form-input" />
                @error('name')
                    <span class="error-sub-text" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="auth-page__form-group">
                <label for="email" class="auth-page__form-label">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="auth-page__form-input" />
                @error('email')
                    <span class="error-sub-text" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="auth-page__form-group">
                <label for="password" class="auth-page__form-label">Password</label>
                <input type="password" name="password" id="password" required autocomplete="new-password"
                    class="auth-page__form-input" />
                @error('password')
                    <span class="error-sub-text" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="auth-page__form-group">
                <label for="password_confirmation" class="auth-page__form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="auth-page__form-input" />
                @error('password_confirmation')
                    <span class="error-sub-text" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="auth-page__form-group">
                <input type="submit" value="Register" class="auth-page__form-submit" />
            </div>
            <div class="auth-page__form-group">
                <a class="auth-page__form-register" href="{{ route('login') }}">
                    Already registered?</a>
            </div>
        </form>
    </div>
@endsection


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
