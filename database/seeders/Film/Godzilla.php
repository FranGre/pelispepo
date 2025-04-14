<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Godzilla extends Seeder
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
                'title' => 'Godzilla',
                'description' => 'En 1998, Godzilla, un monstruo gigantesco y mutante, llega a Nueva York tras ser despertado por experimentos nucleares. Un equipo de científicos debe encontrar una manera de detener a la criatura antes de que cause más destrucción.',
                'release_date' => '1998-05-20',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Godzilla+(1998).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Godzilla+98.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Godzilla',
                'description' => 'En 2014, una nueva amenaza aparece cuando un antiguo monstruo, Godzilla, resucita después de una catástrofe nuclear. Mientras la humanidad se enfrenta a una amenaza global, un grupo de científicos trata de salvar al mundo.',
                'release_date' => '2014-05-16',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Godzilla+(2014).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Godzilla+2014.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Godzilla: Rey de los monstruos',
                'description' => 'En esta secuela, Godzilla se enfrenta a otras criaturas gigantes, como King Ghidorah, Mothra y Rodan. El mundo está al borde del colapso y el enfrentamiento entre estos titanes podría cambiar el destino de la humanidad.',
                'release_date' => '2019-05-31',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Godzilla_+Rey+de+los+Monstruos+(2019).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Godzilla-+Rey+de+los+monstruos.webp'
            ]
        ];

        Film::insert($films);
    }
}
