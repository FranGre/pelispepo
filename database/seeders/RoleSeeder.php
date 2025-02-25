<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class RoleSeeder extends Seeder
{
    public $adminUuid = '7527e5d0-5cbb-442c-8cb3-1c676b776b2b';
    public $clientUuid = 'bb34635f-2d3a-4f70-9aec-5e131be8edf0';
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => $this->adminUuid,
            'name' => 'ADMIN'
        ]);

        Role::create([
            'id' => $this->clientUuid,
            'name' => 'CLIENT'
        ]);
    }
}
