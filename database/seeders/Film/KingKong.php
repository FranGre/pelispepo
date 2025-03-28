<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class KingKong extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'King Kong',
                'description' => 'En esta nueva versión de la historia clásica, un equipo de cineastas viaja a una misteriosa isla para filmar su película, solo para encontrarse con un enorme gorila llamado King Kong, quien se convierte en el centro de atención.',
                'release_date' => '2005-12-14',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
