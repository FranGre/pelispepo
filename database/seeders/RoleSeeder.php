<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => (string) Str::uuid(),
            'name' => 'ADMIN'
        ]);

        Role::create([
            'id' => (string) Str::uuid(),
            'name' => 'CLIENT'
        ]);
    }
}
