<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Ralph extends Seeder
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
                'title' => '¡Rompe Ralph!',
                'description' => 'Ralph, un villano de un videojuego clásico, busca ser un héroe mientras viaja a través de diferentes mundos de videojuegos.',
                'release_date' => '2012-11-02',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Ralph+El+Demoledor(2012).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/%C2%A1Rompe+Ralph!.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ralph Rompe Internet',
                'description' => 'Ralph y Vanellope viajan al vasto mundo de Internet para encontrar una pieza de repuesto que pueda salvar el juego de Vanellope.',
                'release_date' => '2018-11-21',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Ralph+rompe+internet.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ralph+rompe+Internet.webp'
            ],
        ];

        Film::insert($films);
    }
}