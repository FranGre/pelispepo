<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Deadpool extends Seeder
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
                'title' => 'Deadpool I',
                'description' => 'Wade Wilson, un ex-militar y mercenario, es diagnosticado con cáncer terminal. Para salvar su vida, acepta someterse a un experimento secreto que le otorgará habilidades de curación acelerada. Tras sobrevivir, se convierte en Deadpool, un antihéroe con un sentido del humor irreverente y un deseo de venganza contra aquellos que lo deformaron. Con la ayuda de sus nuevos poderes, lucha contra su antiguo torturador, Ajax.',
                'release_date' => '2016-02-12',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Deadpool II',
                'description' => 'Deadpool regresa con una nueva misión: salvar a un joven mutante llamado Russell de las garras de Cable, un viajero del tiempo que busca vengarse de él. Junto a un equipo de nuevos reclutas, Deadpool forma "X-Force" para proteger al joven y enfrentar a Cable. A medida que la acción se desata, Deadpool también lucha con sus propios problemas personales, incluyendo su relación con Vanessa.',
                'release_date' => '2018-05-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Deadpool & Wolverine',
                'description' => 'Deadpool y Wolverine unen fuerzas en esta épica película de acción. Cuando una nueva amenaza aparece, ambos antihéroes deben combinar sus habilidades para enfrentar a un enemigo formidable. Con su estilo irreverente y sus bromas constantes, Deadpool y Wolverine nos traen una aventura explosiva llena de humor negro, combates intensos y personajes muy queridos.',
                'release_date' => '2024-07-25',
                'url' => '',
                'cover_url' => ''
            ]
        ];


        Film::insert($films);
    }
}
