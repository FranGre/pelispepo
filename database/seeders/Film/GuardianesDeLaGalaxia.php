<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class GuardianesDeLaGalaxia extends Seeder
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
                'title' => 'Guardianes de la Galaxia',
                'description' => 'Un grupo de inadaptados cósmicos, liderados por Peter Quill, se unen para proteger un artefacto poderoso. A pesar de sus diferencias, se convierten en héroes y deben enfrentarse a un villano que amenaza con destruir el universo.',
                'release_date' => '2014-08-01',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Guardianes+de+la+galaxia.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Guardianes de la Galaxia Vol. 2',
                'description' => 'Los Guardianes se enfrentan a nuevos desafíos mientras exploran los orígenes de Peter Quill. A medida que surgen conflictos personales, el grupo de héroes debe enfrentarse a nuevas amenazas cósmicas y resolver los misterios de su pasado.',
                'release_date' => '2017-05-05',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Guardianes+de+la+galaxia+Vol.+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Guardianes de la Galaxia Vol. 3',
                'description' => 'En su última aventura, los Guardianes deben hacer frente a las consecuencias de sus acciones pasadas mientras enfrentan a un enemigo aún más poderoso. El grupo se ve obligado a tomar decisiones difíciles que podrían cambiar sus destinos para siempre.',
                'release_date' => '2023-05-05',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Guardianes+de+la+galaxia+Vol.+3.webp'
            ]
        ];

        Film::insert($films);
    }
}
