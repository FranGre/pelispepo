<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class TomYJerry extends Seeder
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
                'title' => 'Tom y Jerry',
                'description' => 'Tom y Jerry se embarcan en una nueva aventura en la ciudad de Nueva York, donde sus eternas rivalidades llevan a situaciones cómicas mientras causan caos en el hotel donde se celebra una boda de alto perfil. Mientras tanto, Kayla, una joven empleada del hotel, se ve atrapada entre el caos de los dos, enfrentándose a su propia lucha por encajar en un mundo lleno de riqueza y celebridades.',
                'release_date' => '2021-02-26',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Tom_y_Jerry_(2021).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Tom+y+Jerry.webp'
            ]
        ];

        Film::insert($films);
    }
}