<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Divergente extends Seeder
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
                'title' => 'Divergente',
                'description' => 'En un futuro distópico, la sociedad está dividida en facciones según virtudes. Tris Prior descubre que es divergente, alguien que no se adapta a ninguna facción. Junto con su mentor Cuatro, luchará para descubrir los secretos del sistema y enfrentarse a las fuerzas que buscan destruirla.',
                'release_date' => '2014-03-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Insurgente',
                'description' => 'Tris Prior y Cuatro huyen después de la caída del sistema de facciones. Mientras enfrentan nuevos desafíos, deben luchar para evitar la destrucción de su mundo, mientras Tris descubre más sobre su propia identidad y los secretos detrás de los divergentes.',
                'release_date' => '2015-03-20',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Divergente: Leal',
                'description' => 'Tris y Cuatro, junto con sus aliados, continúan luchando por la libertad en un mundo dividido. Mientras descubren más sobre el pasado, enfrentan traiciones y revelaciones sorprendentes que desafían todo lo que creían saber sobre su sociedad y sobre sí mismos.',
                'release_date' => '2016-03-18',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
