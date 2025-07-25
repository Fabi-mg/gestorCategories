<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => 'admin'
        ]);
    }
}
