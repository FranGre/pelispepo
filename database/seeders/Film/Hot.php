<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Hot extends Seeder
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
                'title' => '365 días',
                'description' => 'La historia sigue a Laura, una joven que, después de ser secuestrada por Massimo, un líder de la mafia, se ve obligada a pasar 365 días con él para enamorarse. A medida que la relación avanza, la tensión entre el deseo y la violencia se convierte en el centro de su vínculo.',
                'release_date' => '2020-02-07',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/365+di%CC%81as.webp'
            ]
        ];

        Film::insert($films);
    }
}
