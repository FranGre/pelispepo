<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class EscapeRoom extends Seeder
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
                'title' => 'Escape Room',
                'description' => 'Seis extraños se encuentran atrapados en una serie de salas de escape que se tornan mortales. A medida que intentan resolver los complejos acertijos, descubren que el juego tiene consecuencias letales si no logran escapar a tiempo.',
                'release_date' => '2019-01-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Escape+Room+2-+Mueres+por+salir.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Escape Room 2: Mueres por salir',
                'description' => 'Los sobrevivientes de las salas mortales del Escape Room descubren que todo estaba orquestado por una misteriosa organización. Atrapados nuevamente, deberán enfrentarse a nuevos desafíos letales para escapar con vida.',
                'release_date' => '2021-07-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Escape+Room.webp'
            ]
        ];

        Film::insert($films);
    }
}
