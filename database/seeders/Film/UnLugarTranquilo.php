<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class UnLugarTranquilo extends Seeder
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
                'title' => 'Un lugar tranquilo',
                'description' => 'En un mundo post-apocalíptico, una familia debe vivir en total silencio para evitar ser cazada por criaturas que se guían por el sonido. La familia lucha por sobrevivir mientras enfrentan nuevas amenazas en su entorno mortalmente silencioso.',
                'release_date' => '2018-04-06',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Un+lugar+tranquilo.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Un lugar tranquilo 2',
                'description' => 'Tras los eventos de la primera película, la familia Abbott se ve obligada a enfrentarse a nuevos desafíos mientras buscan un refugio. A medida que descubren más sobre las criaturas y otros sobrevivientes, deben hacer frente a una nueva serie de pruebas.',
                'release_date' => '2020-05-28',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Un+lugar+tranquilo+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Un lugar tranquilo: Día 1',
                'description' => 'Esta precuela explora los eventos que preceden a la llegada de las criaturas asesinas. El caos estalla cuando las criaturas comienzan a cazar a los humanos, y los sobrevivientes luchan por adaptarse a su nuevo mundo silencioso.',
                'release_date' => '2021-09-10',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Un+lugar+tranquilo-+Di%CC%81a+1.webp'
            ]
        ];

        Film::insert($films);
    }
}
