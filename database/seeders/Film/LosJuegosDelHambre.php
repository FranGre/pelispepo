<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LosJuegosDelHambre extends Seeder
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
                'title' => 'Los juegos del hambre',
                'description' => 'En un futuro distópico, Katniss Everdeen se ofrece como tributo en los Juegos del Hambre, un evento televisado donde jóvenes de distintos distritos deben pelear a muerte hasta que solo quede uno.',
                'release_date' => '2012-03-23',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+juegos+del+hambre.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los juegos del hambre: en llamas',
                'description' => 'Katniss Everdeen regresa al torneo de los Juegos del Hambre, ahora convertida en símbolo de rebelión, mientras el Capitolio prepara una nueva edición especial del evento con antiguos ganadores.',
                'release_date' => '2013-11-22',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+juegos+del+hambre-+En+llamas.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los juegos del hambre: Sinsajo - Parte 1',
                'description' => 'Katniss lidera la resistencia contra el Capitolio, convirtiéndose en el símbolo de la rebelión mientras enfrenta nuevas amenazas, traiciones y desafíos de los que dependen la libertad de Panem.',
                'release_date' => '2014-11-21',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+juegos+del+hambre-+Sinsajo.+Parte+1.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los juegos del hambre: Sinsajo - Parte 2',
                'description' => 'La batalla final para derrocar al Capitolio comienza, con Katniss al frente de un ejército decidido a poner fin a la tiranía de Snow. La guerra será decisiva y determinará el futuro de Panem.',
                'release_date' => '2015-11-20',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+juegos+del+hambre-+Sinsajo.+Parte+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los juegos del hambre: balada de pájaros cantores y serpientes',
                'description' => 'En la precuela de la saga, Coriolanus Snow, un joven ambicioso, se enfrenta a un destino incierto en los primeros días de los Juegos del Hambre, mientras lucha por el poder en un mundo cada vez más dividido.',
                'release_date' => '2023-11-17',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+juegos+del+hambre-+Balada+de+pa%CC%81jaros+cantores+y+serpientes+.webp'
            ]
        ];

        Film::insert($films);
    }
}
