<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class MonsterHigh extends Seeder
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
                'title' => 'Monster High',
                'description' => 'En un mundo lleno de criaturas sobrenaturales, los estudiantes de Monster High luchan por encontrar su lugar. Entre clases de monstruos y amistades, se enfrentan a situaciones que les harán crecer y aceptar sus diferencias.',
                'release_date' => '2022-10-31',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Monster+High_+The+Movie.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Monster+High.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Monster High 2',
                'description' => 'La aventura continúa en Monster High. Nuevas amenazas, nuevos monstruos y más desafíos para los estudiantes que deben unir fuerzas para salvar su escuela y sus secretos, mientras enfrentan los prejuicios de un mundo que no los entiende.',
                'release_date' => '2023-10-31',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Monster+High+2.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Monster+High+2.webp'
            ]
        ];

        Film::insert($films);
    }
}