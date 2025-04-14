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
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/el+francotirador.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/El+francotirador.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => '13 Horas: Los soldados secretos de Bengasi',
                'description' => 'Basada en hechos reales, esta película relata el ataque terrorista a la embajada estadounidense en Bengasi, Libia, y cómo un grupo de exmilitares de élite luchó para proteger a los sobrevivientes, enfrentando una batalla imposible con recursos limitados.',
                'release_date' => '2016-01-15',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/13_Horas_Los_Soldados_Secretos_de_Bengasi.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/13+Horas-+Los+soldados+secretos+de+Bengasi.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hasta el último hombre',
                'description' => 'La historia real de Desmond Doss, un objetor de conciencia que sirvió como médico de combate en la Segunda Guerra Mundial. A pesar de las presiones, se negó a portar armas y salvó a 75 compañeros durante la Batalla de Okinawa, convirtiéndose en el primer objetor de conciencia en recibir la Medalla de Honor.',
                'release_date' => '2016-12-25',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Hasta_el_ultimo_hombre_(2016).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Hasta+el+u%CC%81ltimo+hombre.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Heroico',
                'description' => 'Luis, adolescente de origen nativo americano, se inscribe en un colegio militar en busca de un futuro mejor. Sus nuevos compañeros y él se ven sometidos a un sistema jerárquico brutal, en el que los alumnos veteranos humillan a los recién llegados.',
                'release_date' => '2023-12-25',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Heroico+(2023).mp4',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}