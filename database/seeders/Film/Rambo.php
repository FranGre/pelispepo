<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Rambo extends Seeder
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
                'title' => 'Rambo I',
                'description' => 'John Rambo, un veterano de la Guerra de Vietnam, es arrestado en un pequeño pueblo por vagabundeo, lo que provoca una serie de eventos violentos.',
                'release_date' => '1982-10-22',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rambo.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rambo+I.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rambo II',
                'description' => 'Rambo es liberado de prisión para una misión en Vietnam, con el objetivo de rescatar a prisioneros de guerra estadounidenses.',
                'release_date' => '1985-05-22',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rambo+II.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rambo+II.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rambo III',
                'description' => 'Rambo va a Afganistán para rescatar a su amigo, el teniente coronel Trautman, que ha sido capturado por las fuerzas soviéticas.',
                'release_date' => '1988-05-25',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rambo+III.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rambo+III.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rambo IV',
                'description' => 'Rambo, viviendo en Tailandia, ayuda a un grupo de misioneros a rescatar a sus compañeros en Birmania.',
                'release_date' => '2008-02-22',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rambo+Regreso+al+Infierno.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rambo+IV.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rambo V: Last Blood',
                'description' => 'Rambo enfrenta a un cartel mexicano de la droga cuando la nieta de una vieja amiga es secuestrada.',
                'release_date' => '2019-09-20',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rambo+Last+Blood.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rambo+V-Last+Blood.webp'
            ]
        ];

        Film::insert($films);
    }
}