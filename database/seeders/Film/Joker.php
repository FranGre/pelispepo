<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Joker extends Seeder
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
                'title' => 'Joker',
                'description' => 'Arthur Fleck es un hombre solitario que lucha por encontrar su lugar en la sociedad. Mientras enfrenta el rechazo y la burla, se convierte en el infame villano conocido como el Joker, desatando caos en Gotham City.',
                'release_date' => '2019-10-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Joker.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Joker: Folie à Deux',
                'description' => 'La secuela de Joker, en la que Arthur Fleck, también conocido como el Joker, se encuentra en una nueva aventura, esta vez acompañado por una figura misteriosa. La película profundiza en la psicología de los personajes y su relación con la locura.',
                'release_date' => '2024-10-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Joker-+Folie+a%CC%80+Deux.webp'
            ]
        ];

        Film::insert($films);
    }
}
