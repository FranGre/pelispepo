<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Rocky extends Seeder
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
                'title' => 'Rocky I',
                'description' => 'El boxeador Rocky Balboa tiene la oportunidad de enfrentarse al campeón mundial de los pesos pesados, Apollo Creed.',
                'release_date' => '1976-11-21',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rocky_1.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rocky_1.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rocky II',
                'description' => 'Después de su primera pelea, Rocky lucha por encontrar su lugar en la vida y enfrentarse a Apollo Creed una vez más.',
                'release_date' => '1979-06-15',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rocky_II.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rocky_II.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rocky III',
                'description' => 'Rocky se enfrenta a un joven y ambicioso retador, Clubber Lang, mientras lucha contra sus propios miedos.',
                'release_date' => '1982-05-28',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rocky_III.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rocky_III.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rocky IV',
                'description' => 'Rocky debe enfrentarse al boxeador soviético Ivan Drago, que mató a su amigo Apollo en el ring.',
                'release_date' => '1985-11-27',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rocky_IV+.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rocky_IV+.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rocky V',
                'description' => 'Después de perder todo su dinero, Rocky regresa a Filadelfia y entrena a un joven boxeador prometedor.',
                'release_date' => '1990-11-16',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rocky_V.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rocky_V.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rocky Balboa',
                'description' => 'Ahora retirado, Rocky regresa al ring para enfrentarse a un joven campeón de peso pesado.',
                'release_date' => '2006-12-20',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Rocky_Balboa.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rocky_Balboa.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Creed I',
                'description' => 'Adonis Johnson, el hijo de Apollo Creed, busca la ayuda de Rocky Balboa para convertirse en boxeador profesional.',
                'release_date' => '2015-11-25',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Creed_Corazon_De_Campeon.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/creed_I.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Creed II',
                'description' => 'Adonis Creed enfrenta a Viktor Drago, el hijo de Ivan Drago, mientras Rocky lucha con sus propios demonios del pasado.',
                'release_date' => '2018-11-21',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Creed_II_Defendiendo_El_Legado.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Creed+II.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Creed III',
                'description' => 'Adonis Creed se enfrenta a un nuevo rival del pasado mientras maneja las dificultades de su vida personal y profesional.',
                'release_date' => '2023-03-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Creed-3.webp'
            ]
        ];

        Film::insert($films);
    }
}