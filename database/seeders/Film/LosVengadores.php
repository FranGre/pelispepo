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
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los vengadores: La era de Ultrón',
                'description' => 'Los Vengadores deben enfrentarse a Ultrón, una inteligencia artificial creada por Tony Stark que se vuelve maligna y planea erradicar a la humanidad.',
                'release_date' => '2015-05-01',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Vengadores: Infinity War',
                'description' => 'Thanos, el titán loco, se enfrenta a los Vengadores y sus aliados en un intento de recolectar las gemas del infinito para destruir la mitad del universo.',
                'release_date' => '2018-04-27',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Vengadores: Endgame',
                'description' => 'Tras los devastadores eventos de Infinity War, los Vengadores restantes deben encontrar una forma de revertir los efectos de la desaparición masiva de seres vivos y salvar al universo.',
                'release_date' => '2019-04-26',
                'url' => '',
                'cover_url' => ''
            ],
        ];

        Film::insert($films);
    }
}
