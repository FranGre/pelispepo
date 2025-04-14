<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PhineasYFerb extends Seeder
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
                'title' => 'Phineas y Ferb, la película: Candace contra el universo',
                'description' => 'Phineas y Ferb deben rescatar a su hermana Candace, quien ha sido transportada a otro universo. En este viaje, se enfrentan a nuevos desafíos, mientras se embarcan en una misión para salvarla y restaurar el equilibrio del multiverso.',
                'release_date' => '2020-08-28',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Phineas+y+Ferb+Candace+contra+el+universo.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Phineas+y+Ferb%2C+la+peli%CC%81cula-+Candace+contra+el+universo.webp'
            ]
        ];

        Film::insert($films);
    }
}