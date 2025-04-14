<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class EscuadronSuicida extends Seeder
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
                'title' => 'Escuadrón Suicida',
                'description' => 'Un grupo de criminales con habilidades especiales son reclutados por el gobierno para llevar a cabo una misión suicida. El Escuadrón Suicida debe infiltrarse en un territorio hostil para destruir una amenaza mortal, pero ¿quién sobrevivirá?',
                'release_date' => '2016-08-05',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Escuadron+Suicida(2016).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Escuadro%CC%81n+suicida.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El Escuadrón Suicida',
                'description' => 'En esta secuela, un nuevo grupo de villanos es reclutado para una misión aún más peligrosa. Esta vez, se enfrentan a una amenaza alienígena y a un villano brutal mientras luchan por sobrevivir y completar su misión.',
                'release_date' => '2021-08-06',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Escuadron_Suicida_2.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/El+Escuadro%CC%81n+Suicida.webp'
            ]
        ];

        Film::insert($films);
    }
}
