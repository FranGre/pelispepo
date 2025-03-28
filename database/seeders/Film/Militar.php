<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Militar extends Seeder
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
                'title' => 'El francotirador',
                'description' => 'Un francotirador de las fuerzas armadas de los Estados Unidos se ve obligado a enfrentarse a la dura realidad de la guerra moderna. A través de sus ojos, la película sigue su vida en el campo de batalla mientras se convierte en uno de los tiradores más mortales en la historia militar.',
                'release_date' => '2014-12-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => '13 Horas: Los soldados secretos de Bengasi',
                'description' => 'Basada en hechos reales, esta película relata el ataque terrorista a la embajada estadounidense en Bengasi, Libia, y cómo un grupo de exmilitares de élite luchó para proteger a los sobrevivientes, enfrentando una batalla imposible con recursos limitados.',
                'release_date' => '2016-01-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hasta el último hombre',
                'description' => 'La historia real de Desmond Doss, un objetor de conciencia que sirvió como médico de combate en la Segunda Guerra Mundial. A pesar de las presiones, se negó a portar armas y salvó a 75 compañeros durante la Batalla de Okinawa, convirtiéndose en el primer objetor de conciencia en recibir la Medalla de Honor.',
                'release_date' => '2016-12-25',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}