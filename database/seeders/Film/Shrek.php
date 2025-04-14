<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Shrek extends Seeder
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
                'title' => 'Shrek 1',
                'description' => 'Un ogro llamado Shrek busca vivir en paz en su pantano, pero se ve obligado a embarcarse en una aventura para rescatar a una princesa, mientras forma una inesperada amistad.',
                'release_date' => '2001-04-22',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Shrek_1_(2001).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Shrek.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Shrek 2',
                'description' => 'Shrek y Fiona regresan de su luna de miel, pero la visita a los padres de Fiona provoca caos y nuevas aventuras, mientras que un nuevo villano amenaza su felicidad.',
                'release_date' => '2004-05-19',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Shrek_2_(2004).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Shrek+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Shrek 3',
                'description' => 'Shrek, junto con sus amigos, busca al heredero legítimo del trono para que pueda gobernar el reino y evitar que el malvado príncipe Charming tome el control.',
                'release_date' => '2007-05-18',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Shrek_3_(2007).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Shrek+3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Shrek 4: Felices para siempre',
                'description' => 'En esta película, Shrek se enfrenta a una versión alternativa de su vida, luego de hacer un trato con el astuto Rumpelstiltskin que pone en riesgo su felicidad y su familia.',
                'release_date' => '2010-05-21',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Shrek+4+(2010).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Shrek+4-+Felices+para+siempre.webp'
            ]
        ];

        Film::insert($films);
    }
}