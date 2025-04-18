<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Madagascar extends Seeder
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
                'title' => 'Madagascar',
                'description' => 'Un grupo de animales del zoológico de Central Park se encuentra varado en la isla de Madagascar, enfrentándose a una serie de situaciones cómicas y aventuras mientras intentan regresar a Nueva York.',
                'release_date' => '2005-05-27',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Madagascar.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Madagascar.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Madagascar 2',
                'description' => 'Los animales del zoológico continúan su aventura en África, encontrando a sus familiares y enfrentando nuevos desafíos, mientras buscan una forma de regresar a Nueva York.',
                'release_date' => '2008-11-07',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Madagascar+2.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Madagascar+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Madagascar 3: De marcha por Europa',
                'description' => 'Los animales del zoológico siguen su viaje por Europa, intentando regresar a Nueva York mientras se enfrentan a un circo y tratan de hacer nuevos amigos en el proceso.',
                'release_date' => '2012-06-08',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Madagascar+3+Los+Fugitivos.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Madagascar+3-De+marcha+por+Europa.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los pingüinos de Madagascar',
                'description' => 'Los famosos pingüinos de Madagascar tienen su propia misión secreta, enfrentándose a una nueva amenaza para salvar al mundo mientras se embarcan en una aventura llena de acción y comedia.',
                'release_date' => '2014-11-26',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Los+Pinguinos+de+Madagascar.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+pingu%CC%88inos+de+Madagascar.webp'
            ]
        ];

        Film::insert($films);
    }
}
