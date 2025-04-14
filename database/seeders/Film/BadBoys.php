<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class BadBoys extends Seeder
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
                'title' => 'Bad Boys',
                'description' => 'Mike Lowrey y Marcus Burnett son dos detectives de narcóticos de Miami que deben trabajar juntos para resolver un caso de robo de drogas y enfrentarse a una peligrosa banda de criminales.',
                'release_date' => '1995-04-07',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Bad_Boys_Dos_policiasrebeldes_(1995).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Bad+Boys.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Bad Boys II: Vuelven más rebeldes',
                'description' => 'Mike y Marcus regresan para investigar un nuevo caso relacionado con el tráfico de drogas. La acción y las persecuciones aumentan en esta secuela de la exitosa película de 1995.',
                'release_date' => '2003-07-18',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Bad_Boys_2_vuelven_mas_rebeldes_(2003).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Bad+Boys+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Bad Boys para siempre',
                'description' => 'Mike y Marcus se ven obligados a reunirse una vez más para enfrentarse a un peligroso cartel de narcotraficantes y lidiar con el envejecimiento, mientras intentan proteger su ciudad y su amistad.',
                'release_date' => '2020-01-17',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Bad_Boys_3_Para_siempre_(2020).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Bad+Boys+for+Life.webp'
            ]
        ];

        Film::insert($films);
    }
}
