<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Matrix extends Seeder
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
                'title' => 'Matrix',
                'description' => 'Un programador llamado Neo descubre que la realidad que conoce es una simulación creada por las máquinas para controlar a los humanos. Junto a un grupo de rebeldes, Neo lucha por liberar a la humanidad.',
                'release_date' => '1999-03-31',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Matrix Reloaded',
                'description' => 'Neo y los rebeldes continúan luchando contra las máquinas en la búsqueda de la clave para derrotarlas. A medida que se acerca el enfrentamiento final, la verdad sobre el destino de Neo se va revelando.',
                'release_date' => '2003-05-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Matrix Revolutions',
                'description' => 'La batalla final entre los humanos y las máquinas se desata en una guerra apoteósica. Neo debe enfrentarse a un enemigo que puede destruirlo todo, mientras la humanidad depende de su sacrificio.',
                'release_date' => '2003-11-05',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Matrix Resurrections',
                'description' => 'Después de años de paz, Neo regresa a la Matrix, enfrentándose a nuevos desafíos y descubriendo la conexión que lo une con el mundo digital. Las apuestas son más altas que nunca en la lucha por la libertad.',
                'release_date' => '2021-12-22',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
