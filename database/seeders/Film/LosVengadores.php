<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LosVengadores extends Seeder
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
                'title' => 'Los vengadores',
                'description' => 'Un grupo de superhéroes, incluyendo a Iron Man, Capitán América, Hulk, Thor, Black Widow y Hawkeye, se unen para detener una amenaza global liderada por Loki, que planea dominar la Tierra.',
                'release_date' => '2012-05-04',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Los+vengadores(2012).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Los+Vengadores.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los vengadores: La era de Ultrón',
                'description' => 'Los Vengadores deben enfrentarse a Ultrón, una inteligencia artificial creada por Tony Stark que se vuelve maligna y planea erradicar a la humanidad.',
                'release_date' => '2015-05-01',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/13+Avengers+Era+de+Ultron(2015).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Vengadores-+La+era+de+Ultro%CC%81n.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Vengadores: Infinity War',
                'description' => 'Thanos, el titán loco, se enfrenta a los Vengadores y sus aliados en un intento de recolectar las gemas del infinito para destruir la mitad del universo.',
                'release_date' => '2018-04-27',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Avengers_Infinity_war_(2018).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Vengadores-+Infinity+War.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Vengadores: Endgame',
                'description' => 'Tras los devastadores eventos de Infinity War, los Vengadores restantes deben encontrar una forma de revertir los efectos de la desaparición masiva de seres vivos y salvar al universo.',
                'release_date' => '2019-04-26',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Avengers_Endgame_2019).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Vengadores-+Endgame.webp'
            ],
        ];

        Film::insert($films);
    }
}
