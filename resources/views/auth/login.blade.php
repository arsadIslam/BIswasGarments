@extends('auth.layout')

@section('title', 'Login')
@section('eyebrow', 'Welcome back')
@section('hero_title', 'Sign in and keep shopping.')
@section('hero_copy', 'Access your saved addresses, wishlist, order history, and member-only fashion offers at Biswas Garments.')
@section('form_title', 'Login')
@section('form_subtitle', 'Enter your account details to continue shopping.')

@section('content')
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <div class="form-grid">
            <div class="field full">
                <label for="login">Email or Phone</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 4h16v16H4z"></path>
                        <path d="m22 6-10 7L2 6"></path>
                    </svg>
                    <input id="login" name="login" type="text" value="{{ old('login') }}" placeholder="you@example.com or mobile number" required autofocus>
                </div>
                @error('login')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field full">
                <label for="password">Password</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="4" y="11" width="16" height="10" rx="2"></rect>
                        <path d="M8 11V7a4 4 0 0 1 8 0v4"></path>
                    </svg>
                    <input id="password" name="password" type="password" placeholder="Enter password" required>
                </div>
                @error('password')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-options">
            <label class="check">
                <input type="checkbox" name="remember" value="1">
                Remember me on this device
            </label>
            <a class="text-link" href="#">Forgot password?</a>
        </div>

        <button class="submit-button" type="submit">
            Login to Account
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 12h14"></path>
                <path d="m13 6 6 6-6 6"></path>
            </svg>
        </button>

        <p class="switch-copy">
            New to Biswas Garments?
            <a class="text-link" href="{{ route('signup') }}">Create an account</a>
        </p>

        <div class="secure-note">
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"></path>
                <path d="m9 12 2 2 4-4"></path>
            </svg>
            Secure customer login for future ecommerce checkout.
        </div>
    </form>
@endsection
