<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Monstruos extends Seeder
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
                'title' => 'Monstruos S.A.',
                'description' => 'En un mundo habitado por monstruos, Monstruos S.A. es la compañía encargada de generar energía a partir de los gritos de los niños. Dos amigos, Mike y Sulley, se ven envueltos en una serie de eventos inesperados cuando una niña humana llega al mundo de los monstruos.',
                'release_date' => '2001-11-02',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Monstruos+S.A..webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Monstruos University',
                'description' => 'La precuela de Monstruos S.A., en la que Mike y Sulley se conocen en la universidad. Juntos atraviesan una serie de desafíos para convertirse en los mejores asustadores del mundo, enfrentando su amistad, miedos y diferencias.',
                'release_date' => '2013-06-21',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Monstruos+University.webp'
            ]
        ];

        Film::insert($films);
    }
}