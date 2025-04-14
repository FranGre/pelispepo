<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LaLigaDeLaJusticia extends Seeder
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
                'title' => 'Liga de la Justicia Oscura: La guerra de Apókolips',
                'description' => 'La Liga de la Justicia debe unirse a los héroes más poderosos de la Tierra, incluidos los miembros de la Liga de la Justicia Oscura, para detener a Darkseid, quien está librando una guerra apocalíptica contra la humanidad.',
                'release_date' => '2017-10-31',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Liga_de_La_Justicia_Oscura_Apokolips_War.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Liga_de_La_Justicia_Oscura_Apokolips_War.webp'
            ],
        ];

        Film::insert($films);
    }
}
