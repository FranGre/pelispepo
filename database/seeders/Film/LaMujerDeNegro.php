<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LaMujerDeNegro extends Seeder
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
                'title' => 'La mujer de negro',
                'description' => 'Una joven viuda se enfrenta a fenómenos paranormales mientras trabaja en una mansión remota, donde descubre la presencia de una mujer vestida de negro que causa la muerte de los niños del pueblo.',
                'release_date' => '2012-02-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/La+mujer+de+negro+(2012).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+mujer+de+negro.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La mujer de negro 2: El ángel de la muerte',
                'description' => 'Un grupo de personas llega a la mansión, ahora convertida en un refugio para niños durante la Segunda Guerra Mundial. Los horrores del pasado resucitan cuando la presencia de la mujer de negro se desata nuevamente.',
                'release_date' => '2014-02-13',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/La+mujer+de+negro+2+El+angel+de+la+muerte+(2014).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+mujer+de+negro-+El+a%CC%81ngel+de+la+muerte.webp'
            ]
        ];

        Film::insert($films);
    }
}
