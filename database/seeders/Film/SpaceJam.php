<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class SpaceJam extends Seeder
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
                'title' => 'Space Jam',
                'description' => 'Michael Jordan se une a los Looney Tunes para salvar a Bugs Bunny y sus amigos de un equipo de extraterrestres, en una mezcla de animación y acción real.',
                'release_date' => '1996-11-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Space Jam: Nuevas Leyendas',
                'description' => 'LeBron James se une a los Looney Tunes en una aventura digital en la que debe salvar a su hijo de un algoritmo malvado, mientras compiten en un partido de baloncesto.',
                'release_date' => '2021-07-16',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}