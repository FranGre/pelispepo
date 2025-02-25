<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            ['id' => (string) Str::uuid(), 'name' => 'Acción'],
            ['id' => (string) Str::uuid(), 'name' => 'Aventura'],
            ['id' => (string) Str::uuid(), 'name' => 'Ciencia Ficción'],
            ['id' => (string) Str::uuid(), 'name' => 'Comedia'],
            ['id' => (string) Str::uuid(), 'name' => 'Drama'],
            ['id' => (string) Str::uuid(), 'name' => 'Terror'],
            ['id' => (string) Str::uuid(), 'name' => 'Romántica'],
            ['id' => (string) Str::uuid(), 'name' => 'Suspenso'],
            ['id' => (string) Str::uuid(), 'name' => 'Fantasía'],
            ['id' => (string) Str::uuid(), 'name' => 'Thriller'],
            ['id' => (string) Str::uuid(), 'name' => 'Documental'],
            ['id' => (string) Str::uuid(), 'name' => 'Musical'],
            ['id' => (string) Str::uuid(), 'name' => 'Misterio'],
            ['id' => (string) Str::uuid(), 'name' => 'Bélico'],
            ['id' => (string) Str::uuid(), 'name' => 'Histórico'],
            ['id' => (string) Str::uuid(), 'name' => 'Animación'],
            ['id' => (string) Str::uuid(), 'name' => 'Familia'],
            ['id' => (string) Str::uuid(), 'name' => 'Crimen'],
            ['id' => (string) Str::uuid(), 'name' => 'Ficción histórica'],
            ['id' => (string) Str::uuid(), 'name' => 'Superhéroes'],
        ];

        Gender::insert($genders);
    }
}
