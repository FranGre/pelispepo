<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['role_id' => '7527e5d0-5cbb-442c-8cb3-1c676b776b2b', 'name' => 'admin', 'email' => 'admin@gmail.com', 'password' => 'Test@1234']);
        User::create(['role_id' => 'bb34635f-2d3a-4f70-9aec-5e131be8edf0', 'name' => 'fran', 'email' => 'fran@gmail.com', 'password' => 'Test@1234']);
    }
}
