<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LasTortugasNinja extends Seeder
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
                'title' => 'Las Tortugas Ninja',
                'description' => 'Cuatro hermanos mutantes adolescentes, entrenados en las artes marciales, se embarcan en una misión para salvar Nueva York y derrotar al malvado Shredder. Con la ayuda de la periodista April O\'Neil, las Tortugas Ninja luchan por detener los planes de Shredder mientras enfrentan sus propios conflictos internos.',
                'release_date' => '2014-08-08',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Tortugas_Ninja_(2014).mp4',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Las Tortugas Ninja: Fuera de las Sombras',
                'description' => 'Las Tortugas Ninja regresan para enfrentarse a una nueva amenaza. Cuando el malvado Shredder se une a científicos y villanos como el supervillano Krang, las Tortugas Ninja deben unirse para detenerlos antes de que destruyan Nueva York. Con nuevos aliados como Casey Jones, las Tortugas deben enfrentarse a sus mayores desafíos hasta ahora.',
                'release_date' => '2016-06-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Tortugas_Ninja_2_Fuera_de_las_sombras_(2016).mp4',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
