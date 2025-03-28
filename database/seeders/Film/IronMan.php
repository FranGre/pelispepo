<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class IronMan extends Seeder
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
                'title' => 'Iron Man',
                'description' => 'Tony Stark, un millonario industrial, es secuestrado por terroristas y obligado a construir un arma de destrucción masiva. En su lugar, crea una armadura avanzada para escapar. Después de regresar a los EE. UU., decide usar su invento para luchar contra el mal como Iron Man.',
                'release_date' => '2008-05-02',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Iron Man 2',
                'description' => 'Tony Stark revela al mundo que él es Iron Man, pero pronto enfrenta la amenaza de Ivan Vanko, quien ha construido su propia versión de la armadura de Iron Man. Mientras tanto, Stark lucha contra la presión del gobierno y la incertidumbre sobre su futuro como héroe.',
                'release_date' => '2010-05-07',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Iron Man 3',
                'description' => 'Tony Stark enfrenta su mayor desafío cuando un terrorista conocido como el Mandarín comienza a atacar a su vida personal. Luchando con las secuelas de los eventos de los Vengadores, Tony debe enfrentarse a nuevos enemigos mientras se cuestiona su identidad como Iron Man.',
                'release_date' => '2013-05-03',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
