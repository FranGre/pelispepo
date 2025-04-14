<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Pokemon extends Seeder
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
                'title' => 'Pokémon: Detective Pikachu',
                'description' => 'Pokémon: Detective Pikachu sigue a Tim Goodman, un joven que busca resolver el misterio detrás de la desaparición de su padre. En su aventura, se une a un Pikachu parlante y con habilidades detective, quien es el único que puede entender. Juntos, se adentran en una ciudad llena de criaturas Pokémon y resuelven un complejo caso que involucra secretos ocultos y conspiraciones, todo mientras enfrentan peligros inesperados y descubren la verdad detrás de los Pokémon que viven entre nosotros.',
                'release_date' => '2019-05-10',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Pokemon_Detective_Pikachu_(2020).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Mentes+poderosas.webp'
            ]
        ];

        Film::insert($films);
    }
}
