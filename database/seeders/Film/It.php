<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class It extends Seeder
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
                'title' => 'It',
                'description' => 'En 1990, un grupo de niños en la ciudad de Derry se enfrenta a una entidad maligna que toma la forma de un payaso llamado Pennywise. A medida que investigan los misteriosos eventos, deben unirse para detener a Pennywise, que ha estado aterrorizando a la ciudad durante generaciones.',
                'release_date' => '1990-11-18',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/It+1990.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'It',
                'description' => 'En 2017, un grupo de niños de Derry se enfrenta a un mal antiguo encarnado en un payaso demoníaco llamado Pennywise. Juntos deben enfrentarse a sus miedos y detenerlo antes de que el mal vuelva a surgir cada 27 años.',
                'release_date' => '2017-09-08',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/It+(ESO)+(2017).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/It.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'It - Capítulo 2',
                'description' => '27 años después, los miembros del grupo de los "Perdedores" se reúnen en Derry para enfrentarse a Pennywise, que ha regresado tras una larga ausencia. Juntos deben hacer frente a sus peores temores y cumplir con la promesa que hicieron de derrotar al monstruo para siempre.',
                'release_date' => '2019-09-06',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/It+Capítulo+2.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/It.+Capi%CC%81tulo+2+.webp'
            ],
        ];

        Film::insert($films);
    }
}
