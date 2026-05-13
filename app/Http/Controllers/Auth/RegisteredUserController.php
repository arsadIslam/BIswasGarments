<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    private const INDIAN_STATES = [
        'Andaman and Nicobar Islands',
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chandigarh',
        'Chhattisgarh',
        'Dadra and Nagar Haveli and Daman and Diu',
        'Delhi',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jammu and Kashmir',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Ladakh',
        'Lakshadweep',
        'Madhya Pradesh',
        'Maharashtra',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'Odisha',
        'Puducherry',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Telangana',
        'Tripura',
        'Uttar Pradesh',
        'Uttarakhand',
        'West Bengal',
    ];

    public function create(): View
    {
        return view('auth.signup');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->merge([
            'phone' => preg_replace('/\D/', '', (string) $request->input('phone')),
        ]);

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'regex:/^[6-9][0-9]{9}$/', 'unique:users,phone'],
            'password' => ['required', 'confirmed', 'min:8'],
            'shopping_preference' => ['nullable', 'string', 'in:women,men,kids,all'],
            'birthday' => ['nullable', 'date', 'before:today'],
            'address' => ['nullable', 'string', 'max:1000'],
            'landmark' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'in:'.implode(',', self::INDIAN_STATES)],
            'postal_code' => ['nullable', 'string', 'regex:/^[0-9]{6}$/'],
            'referral_code' => ['nullable', 'string', 'max:255'],
            'marketing_opt_in' => ['nullable', 'boolean'],
            'terms' => ['accepted'],
        ]);

        $user = User::create([
            'name' => "{$validated['first_name']} {$validated['last_name']}",
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => $validated['password'],
            'shopping_preference' => $validated['shopping_preference'] ?? null,
            'birthday' => $validated['birthday'] ?? null,
            'address' => $validated['address'] ?? null,
            'landmark' => $validated['landmark'] ?? null,
            'city' => $validated['city'] ?? null,
            'state' => $validated['state'] ?? null,
            'postal_code' => $validated['postal_code'] ?? null,
            'referral_code' => $validated['referral_code'] ?? null,
            'marketing_opt_in' => $request->boolean('marketing_opt_in'),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('home')->with('status', 'Welcome to Biswas Garments. Your account is ready.');
    }
}
