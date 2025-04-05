<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class AntMan extends Seeder
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
                'title' => 'Ant-Man',
                'description' => 'Scott Lang, un hombre común, se convierte en el superhéroe Ant-Man después de que el Dr. Hank Pym le entregue un traje que le otorga la capacidad de reducir su tamaño mientras mantiene su fuerza. Lang debe usar sus nuevas habilidades para detener un villano que planea utilizar el mismo traje para fines malignos.',
                'release_date' => '2015-07-17',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Ant-Man-2015.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ant-Man.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ant-Man y la Avispa',
                'description' => 'Después de los eventos de *Captain America: Civil War*, Scott Lang se enfrenta a las consecuencias de ser un superhéroe y padre a la vez. Junto a Hank Pym y su hija Hope, Scott se une a la Avispa para detener a un nuevo villano que busca robar la tecnología de Pym y llevar el caos al mundo.',
                'release_date' => '2018-07-06',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Ant-Man-y-la-Avispa.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ant-Man+y+la+Avispa.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ant-Man y la Avispa: Quantumanía',
                'description' => 'En esta nueva aventura, Scott Lang y su equipo se adentran en el Reino Cuántico, donde se encuentran con nuevas amenazas y misterios. Junto a la Avispa, Scott deberá enfrentarse a la creciente amenaza de Kang el Conquistador, un villano con el poder de manipular el tiempo y el espacio.',
                'release_date' => '2023-02-17',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ant-Man+y+la+Avispa-Quantumani%CC%81a.webp'
            ]
        ];

        Film::insert($films);
    }
}
