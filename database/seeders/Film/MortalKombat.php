<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class MortalKombat extends Seeder
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
                'title' => 'Mortal Kombat',
                'description' => 'En esta nueva versión de Mortal Kombat, un grupo de luchadores se enfrenta a varios campeones de un torneo interdimensional para salvar el mundo de una invasión de una dimensión maligna. La película sigue a Cole Young, un luchador que descubre que posee una marca especial y es reclutado por Raiden para luchar en el torneo.',
                'release_date' => '2021-04-23',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Mortal+Kombat(2021).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Mortal+Kombat.webp'
            ]
        ];

        Film::insert($films);
    }
}