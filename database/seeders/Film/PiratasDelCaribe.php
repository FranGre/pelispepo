<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PiratasDelCaribe extends Seeder
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
                'title' => 'Piratas del Caribe: La maldición de la Perla Negra',
                'description' => 'Un pirata, el Capitán Jack Sparrow, se ve involucrado en una serie de aventuras para recuperar su barco perdido, La Perla Negra, mientras se enfrenta a una maldición que transforma a su tripulación en esqueletos.',
                'release_date' => '2003-07-09',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Piratas del Caribe: El cofre del hombre muerto',
                'description' => 'Jack Sparrow busca encontrar el Cofre del Hombre Muerto para saldar una deuda con Davy Jones, el capitán del Flying Dutchman. Mientras tanto, los piratas enfrentan el peligro de un océano lleno de criaturas monstruosas.',
                'release_date' => '2006-07-07',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Piratas del Caribe: En el fin del mundo',
                'description' => 'Jack Sparrow es rescatado del abismo y se une a sus amigos para enfrentar una batalla épica contra la Compañía de las Indias Orientales y su líder, el temido Davy Jones, en la lucha por el control del océano.',
                'release_date' => '2007-05-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Piratas del Caribe: En mareas misteriosas',
                'description' => 'Jack Sparrow emprende una búsqueda para encontrar la fuente de la juventud, mientras se enfrenta a viejos enemigos, nuevos aliados y una guerra entre los piratas y los enemigos de la corona.',
                'release_date' => '2011-05-20',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Piratas del Caribe: La venganza de Salazar',
                'description' => 'El Capitán Jack Sparrow se enfrenta al temible Capitán Salazar, quien escapa del Triángulo del Diablo para vengarse de Sparrow. Junto con nuevos aliados, Jack debe encontrar el Tridente de Poseidón para salvar su vida.',
                'release_date' => '2017-05-26',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}