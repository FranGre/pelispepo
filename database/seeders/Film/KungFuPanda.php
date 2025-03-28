<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class KungFuPanda extends Seeder
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
                'title' => 'Kung Fu Panda',
                'description' => 'Un torpe pero bondadoso panda llamado Po sueña con ser un gran maestro de kung fu. Cuando el destino lo elige para ser el Guerrero Dragón, Po se enfrenta a la difícil tarea de dominar las artes marciales y salvar el Valle de la Paz.',
                'release_date' => '2008-06-06',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Kung Fu Panda 2',
                'description' => 'Po debe enfrentarse a su pasado mientras trata de detener a un nuevo villano, el ganso Lord Shen, quien planea usar un arma secreta para conquistar China. Po y sus amigos deberán detenerlo antes de que sea demasiado tarde.',
                'release_date' => '2011-05-26',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Kung Fu Panda 3',
                'description' => 'Po se reúne con su padre biológico y descubre un pueblo secreto de pandas. Juntos deben enfrentarse al malvado Kai, quien roba el chi de los maestros de kung fu. Po debe enseñarles a los pandas a luchar para detener a Kai.',
                'release_date' => '2016-01-29',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Kung Fu Panda 4',
                'description' => 'Po y sus amigos enfrentan nuevas aventuras y desafíos mientras continúan protegiendo el Valle de la Paz, en la cuarta entrega de esta exitosa saga de animación.',
                'release_date' => '2024-03-08',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
