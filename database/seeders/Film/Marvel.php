<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Marvel extends Seeder
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
                'title' => 'Black Widow',
                'description' => 'Natasha Romanoff, conocida como Black Widow, enfrenta su pasado oscuro mientras se enfrenta a viejos enemigos y busca redención antes de los eventos que la llevarán a unirse a los Vengadores.',
                'release_date' => '2021-07-09',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/BlackWidow.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Shang-Chi y la leyenda de los diez anillos',
                'description' => 'Shang-Chi, un maestro de kung fu, se ve arrastrado de nuevo al mundo de su padre y la organización criminal de los Diez Anillos, enfrentándose a su destino y a los secretos de su pasado.',
                'release_date' => '2021-09-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Shang-Chi+y+la+leyenda+de+los+diez+anillos.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Doctor Strange: Hechicero Supremo',
                'description' => 'El Dr. Stephen Strange, un brillante cirujano, busca respuestas después de un accidente que destruyó sus manos. Su búsqueda lo lleva al mundo de las artes místicas, donde se convierte en un hechicero supremo.',
                'release_date' => '2016-11-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Doctor+Strange-+Hechicero+Supremo.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Black Panther',
                'description' => 'T’Challa regresa a Wakanda para asumir el trono como rey, pero pronto se enfrenta a la amenaza de Killmonger, un rival que busca derrocarlo y apoderarse del reino.',
                'release_date' => '2018-02-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Black+Panther.webp'
            ]
        ];

        Film::insert($films);
    }
}
