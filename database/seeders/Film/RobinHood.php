<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class RobinHood extends Seeder
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
                'title' => 'Robin Hood',
                'description' => 'Una nueva versión de la historia clásica de Robin Hood, el hombre que se convierte en un héroe al robar a los ricos para darle a los pobres.',
                'release_date' => '2010-05-14',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Robin Hood',
                'description' => 'En esta película de aventuras, Robin Hood es un forajido que lucha contra la corrupción del sheriff de Nottingham y defiende a los inocentes.',
                'release_date' => '2018-11-21',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}