<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_customer_can_signup_with_ecommerce_fields(): void
    {
        $response = $this->post('/signup', [
            'first_name' => 'Arsad',
            'last_name' => 'Islam',
            'email' => 'arsad@example.com',
            'phone' => '9876543210',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'shopping_preference' => 'all',
            'birthday' => '1998-01-01',
            'address' => '123 Main Market Road',
            'landmark' => 'Near City Mall',
            'city' => 'Kolkata',
            'state' => 'West Bengal',
            'postal_code' => '700001',
            'referral_code' => 'BG-WELCOME',
            'marketing_opt_in' => '1',
            'terms' => '1',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'email' => 'arsad@example.com',
            'phone' => '9876543210',
            'landmark' => 'Near City Mall',
            'referral_code' => 'BG-WELCOME',
            'marketing_opt_in' => true,
        ]);
    }

    public function test_customer_can_login_with_phone_number(): void
    {
        User::factory()->create([
            'email' => 'customer@example.com',
            'phone' => '9876543211',
            'password' => 'password123',
        ]);

        $response = $this->post('/login', [
            'login' => '9876543211',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticated();
    }

    public function test_signup_requires_a_valid_ten_digit_indian_mobile_number(): void
    {
        $response = $this->from('/signup')->post('/signup', [
            'first_name' => 'Arsad',
            'last_name' => 'Islam',
            'email' => 'invalid-phone@example.com',
            'phone' => '12345678901',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'terms' => '1',
        ]);

        $response->assertRedirect('/signup');
        $response->assertSessionHasErrors('phone');
        $this->assertGuest();
    }
}
