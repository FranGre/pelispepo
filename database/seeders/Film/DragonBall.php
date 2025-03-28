<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class DragonBall extends Seeder
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
                'title' => 'Dragon Ball Super: Broly',
                'description' => 'Goku y Vegeta se enfrentan a un poderoso guerrero llamado Broly, quien tiene una increíble fuerza y un pasado misterioso. Mientras la batalla se intensifica, el destino del universo pende de un hilo. Los tres luchadores deben enfrentarse no solo entre sí, sino también a su destino compartido en este épico combate.',
                'release_date' => '2018-12-14',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
