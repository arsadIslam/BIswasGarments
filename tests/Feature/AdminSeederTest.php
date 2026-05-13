<?php

namespace Tests\Feature;

use App\Models\Admin;
use Database\Seeders\AdminSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_seeder_creates_default_admin(): void
    {
        $this->seed(AdminSeeder::class);

        $admin = Admin::where('username', 'admin')->first();

        $this->assertNotNull($admin);
        $this->assertTrue(Hash::check('1234567890', $admin->password));
    }
}
