<?php

namespace Tests\Feature;

use Database\Seeders\AdminSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_login_and_view_dashboard(): void
    {
        $this->seed(AdminSeeder::class);

        $response = $this->post('/admin/login', [
            'username' => 'admin',
            'password' => '1234567890',
        ]);

        $response->assertRedirect('/admin');
        $this->assertAuthenticated('admin');

        $this->get('/admin')->assertOk()->assertSee('Admin Dashboard');
    }

    public function test_admin_can_logout(): void
    {
        $this->seed(AdminSeeder::class);

        $this->post('/admin/login', [
            'username' => 'admin',
            'password' => '1234567890',
        ]);

        $response = $this->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertGuest('admin');
    }
}
