<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Megalodon extends Seeder
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
                'title' => 'Megalodón 1',
                'description' => 'Un equipo de investigación submarina debe luchar por su vida cuando descubren al Megalodón, un gigantesco tiburón prehistórico que amenaza con destruirlos. Con una carrera contra el tiempo, los miembros de la tripulación intentan escapar de la bestia marina mientras luchan por sobrevivir.',
                'release_date' => '2018-08-10',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Megalodón 2',
                'description' => 'La secuela de Megalodón sigue a un equipo de expertos y sobrevivientes que se aventuran nuevamente en las profundidades del océano, solo para descubrir que el temible tiburón prehistórico no es el único peligro que acecha bajo las aguas.',
                'release_date' => '2023-08-04',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
