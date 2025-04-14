<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class JohnWick extends Seeder
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
                'title' => 'John Wick',
                'description' => 'Un hombre en busca de venganza tras la muerte de su perro, que fue un último regalo de su difunta esposa. John Wick, un exasesino de la mafia, se ve obligado a regresar a su antigua vida para cobrar venganza.',
                'release_date' => '2014-10-24',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/John+Wick.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/John+Wick.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'John Wick 2: Pacto de sangre',
                'description' => 'John Wick regresa para cumplir con una deuda que le obliga a realizar un trabajo que lo coloca en la mira de asesinos de todo el mundo. La película lleva a John por un mundo de violencia, traición y supervivencia.',
                'release_date' => '2017-02-10',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/John+Wick+Chapter+2(2017).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/John+Wick+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'John Wick 3: Parabellum',
                'description' => 'Tras ser excomulgado de la organización criminal internacional por matar a alguien dentro de los límites del Hotel Continental, John Wick se ve obligado a luchar por su vida mientras una recompensa millonaria se pone sobre su cabeza.',
                'release_date' => '2019-05-17',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/John+Wick+Parabellum.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/John+Wick+3-+Parabellum.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'John Wick 4',
                'description' => 'John Wick continúa su lucha por sobrevivir, enfrentándose a viejos y nuevos enemigos mientras busca venganza y trata de salir del mundo mortal de los asesinos internacionales. La película promete más acción y giros sorprendentes.',
                'release_date' => '2023-03-24',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/John+Wick+4.webp'
            ]
        ];

        Film::insert($films);
    }
}
