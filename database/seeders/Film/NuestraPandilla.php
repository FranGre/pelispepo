<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class NuestraPandilla extends Seeder
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
                'title' => 'Nuestra pandilla',
                'description' => 'Película de comedia que sigue las travesuras y aventuras de un grupo de niños en un vecindario. A lo largo de la película, los niños enfrentan varios retos y situaciones, mientras mantienen una fuerte amistad.',
                'release_date' => '1993-07-30',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Nuestra+Pandilla.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Nuestra+pandilla.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Nuestra pandilla 2',
                'description' => 'Secuela que muestra a los niños ahora un poco mayores, enfrentando nuevos desafíos mientras siguen siendo una pandilla unida. La película mantiene el tono de comedia y amistad.',
                'release_date' => '2005-08-10',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Nuestra+Pandilla+2.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Nuestra+pandilla+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Nuestra pandilla 3',
                'description' => 'En esta tercera entrega, la pandilla enfrenta nuevos problemas mientras intentan adaptarse a la adolescencia. La película explora temas de crecimiento y cambio, pero siempre con el mismo espíritu de amistad.',
                'release_date' => '2007-04-01',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Nuestra+pandilla+3.webp'
            ]
        ];

        Film::insert($films);
    }
}