<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Avatar extends Seeder
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
                'title' => 'Avatar',
                'description' => 'En un futuro distante, un ex-marine llamado Jake Sully es enviado al planeta Pandora como parte de un programa para interactuar con los nativos Na’vi. A medida que Jake se infiltra en su cultura, se encuentra dividido entre su lealtad a los humanos y su conexión con los Na’vi, mientras una gran amenaza pone en peligro su hogar y su gente.',
                'release_date' => '2009-12-18',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Avatar-2009.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Avatar.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Avatar: El Camino del Agua',
                'description' => 'Jake Sully y Neytiri, ahora padres, deben enfrentar nuevas amenazas cuando una fuerza destructiva llega a Pandora. Al buscar refugio en los territorios acuáticos de Pandora, los Sully y su familia se ven envueltos en una lucha por la supervivencia en un mundo lleno de maravillas y peligros naturales, mientras enfrentan la destrucción que los humanos traen consigo.',
                'release_date' => '2022-12-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Avatar+sentido+del+agua.webp'
            ]
        ];

        Film::insert($films);
    }
}
