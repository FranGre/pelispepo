<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Cars extends Seeder
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
                'title' => 'Cars',
                'description' => 'Rayo McQueen, un coche de carreras novato, se pierde en la pequeña ciudad de Radiator Springs. Allí, conoce a una serie de personajes únicos que lo ayudan a descubrir lo que realmente significa la amistad, la humildad y el espíritu deportivo. A medida que se prepara para una gran carrera, Rayo aprende valiosas lecciones fuera de las pistas.',
                'release_date' => '2006-06-09',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Cars.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Cars 2',
                'description' => 'Rayo McQueen y su compañero Mater viajan al extranjero para competir en la Copa Mundial de Automovilismo. Sin embargo, Mater se ve involucrado en una trama de espionaje internacional. Mientras Rayo se enfrenta a la competencia, Mater debe salvar al mundo y proteger a sus amigos en esta divertida aventura de carreras y espionaje.',
                'release_date' => '2011-06-24',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Cars+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Cars 3',
                'description' => 'Cuando un nuevo y rápido coche de carreras, Jackson Storm, amenaza con destronar a Rayo McQueen, él se enfrenta a la posibilidad de que su carrera ha terminado. Determinado a demostrar que aún puede ganar, Rayo se asocia con Cruz Ramírez, una joven y talentosa entrenadora, para luchar por su lugar en las pistas y enseñar a la nueva generación lo que significa ser un verdadero campeón.',
                'release_date' => '2017-06-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Cars+3.webp'
            ]
        ];


        Film::insert($films);
    }
}
