@extends('auth.layout')

@section('title', 'Signup')
@section('eyebrow', 'Create account')
@section('hero_title', 'Join the fashion club.')
@section('hero_copy', 'Create your Biswas Garments account for faster checkout, saved delivery details, referrals, and personalized offers.')
@section('form_title', 'Signup')
@section('form_subtitle', 'Add the details ecommerce stores use for account, delivery, and offer management.')

@section('content')
    <form method="POST" action="{{ route('signup.submit') }}">
        @csrf

        <div class="form-grid">
            <div class="field">
                <label for="first_name">First Name</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 21a8 8 0 0 0-16 0"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" placeholder="First name" required>
                </div>
                @error('first_name')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="last_name">Last Name</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 21a8 8 0 0 0-16 0"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" placeholder="Last name" required>
                </div>
                @error('last_name')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="email">Email Address</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 4h16v16H4z"></path>
                        <path d="m22 6-10 7L2 6"></path>
                    </svg>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                </div>
                @error('email')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="phone">Mobile Number</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 2 .7 2.9a2 2 0 0 1-.4 2.1L8.1 10a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.9.6 2.9.7a2 2 0 0 1 1.6 1.9Z"></path>
                    </svg>
                    <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" placeholder="+91 98765 43210" required>
                </div>
                @error('phone')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="password">Password</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="4" y="11" width="16" height="10" rx="2"></rect>
                        <path d="M8 11V7a4 4 0 0 1 8 0v4"></path>
                    </svg>
                    <input id="password" name="password" type="password" placeholder="Create password" required>
                </div>
                @error('password')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="password_confirmation">Confirm Password</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" required>
                </div>
                @error('password_confirmation')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="gender">Shopping Preference</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 3h12l2 5-4 2v11H8V10L4 8l2-5Z"></path>
                    </svg>
                    <select id="gender" name="shopping_preference">
                        <option value="">Select preference</option>
                        <option value="women" @selected(old('shopping_preference') === 'women')>Women's fashion</option>
                        <option value="men" @selected(old('shopping_preference') === 'men')>Men's fashion</option>
                        <option value="kids" @selected(old('shopping_preference') === 'kids')>Kids fashion</option>
                        <option value="all" @selected(old('shopping_preference') === 'all')>Shop all collections</option>
                    </select>
                </div>
                @error('shopping_preference')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="birthday">Birthday</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg>
                    <input id="birthday" name="birthday" type="date" value="{{ old('birthday') }}">
                </div>
                @error('birthday')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field full">
                <label for="address">Default Delivery Address</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <textarea id="address" name="address" placeholder="House no, street, area, landmark">{{ old('address') }}</textarea>
                </div>
                @error('address')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="city">City</label>
                <div class="control">
                    <input id="city" name="city" type="text" value="{{ old('city') }}" placeholder="City">
                </div>
                @error('city')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="state">State</label>
                <div class="control">
                    <input id="state" name="state" type="text" value="{{ old('state') }}" placeholder="State">
                </div>
                @error('state')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="postal_code">PIN Code</label>
                <div class="control">
                    <input id="postal_code" name="postal_code" type="text" value="{{ old('postal_code') }}" placeholder="700001">
                </div>
                @error('postal_code')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label for="referral_code">Referral Code</label>
                <div class="control">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 12v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7"></path>
                        <path d="M2 7h20v5H2z"></path>
                        <path d="M12 22V7"></path>
                        <path d="M12 7H7.5a2.5 2.5 0 1 1 2.2-3.7L12 7Z"></path>
                        <path d="M12 7h4.5a2.5 2.5 0 1 0-2.2-3.7L12 7Z"></path>
                    </svg>
                    <input id="referral_code" name="referral_code" type="text" value="{{ old('referral_code') }}" placeholder="Optional referral code">
                </div>
                @error('referral_code')
                    <span class="field-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-options">
            <label class="check">
                <input type="checkbox" name="marketing_opt_in" value="1" @checked(old('marketing_opt_in', true))>
                Send me new arrival alerts, sale updates, and member-only coupons.
            </label>
            <label class="check">
                <input type="checkbox" name="terms" value="1" @checked(old('terms')) required>
                I agree to the terms, privacy policy, and ecommerce communication policy.
            </label>
            @error('terms')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>

        <button class="submit-button" type="submit">
            Create Ecommerce Account
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 12h14"></path>
                <path d="m13 6 6 6-6 6"></path>
            </svg>
        </button>

        <p class="switch-copy">
            Already have an account?
            <a class="text-link" href="{{ route('login') }}">Login here</a>
        </p>
    </form>
@endsection
