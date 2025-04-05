<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ScaryMovie extends Seeder
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
                'title' => 'Scary Movie',
                'description' => 'Una parodia de películas de terror y suspenso, siguiendo a un grupo de adolescentes que intentan sobrevivir a una serie de eventos extraños.',
                'release_date' => '2000-07-07',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Scary+Movie.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scary Movie 2',
                'description' => 'Secuela de la primera película, en la que un grupo de jóvenes va a una casa embrujada para una investigación paranormal, pero encuentran situaciones absurdas.',
                'release_date' => '2001-07-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Scary+Movie+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scary Movie 3',
                'description' => 'En esta secuela, el grupo de personajes se enfrenta a una invasión alienígena mientras siguen haciendo parodia de otras películas populares de terror y ciencia ficción.',
                'release_date' => '2003-10-24',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Scary+Movie+3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scary Movie 4',
                'description' => 'El grupo de personajes se enfrenta a situaciones absurdas relacionadas con películas de terror y ciencia ficción, parodiando "La guerra de los mundos" y "El grito".',
                'release_date' => '2006-04-14',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Scary+Movie+4.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scary Movie 5',
                'description' => 'La parodia continúa, ahora tomando películas como "El conjuro" y "Apocalypse", con los personajes enfrentándose a situaciones aún más ridículas.',
                'release_date' => '2013-04-12',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Scary+Movie+5.webp'
            ]
        ];

        Film::insert($films);
    }
}