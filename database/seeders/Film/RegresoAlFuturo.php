<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class RegresoAlFuturo extends Seeder
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
                'title' => 'Regreso al futuro',
                'description' => 'Un joven llamado Marty McFly viaja al pasado con la ayuda de una máquina del tiempo creada por el excéntrico doctor Emmett Brown.',
                'release_date' => '1985-07-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Regreso+al+futuro.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Regreso al futuro II',
                'description' => 'Marty y el Doc viajan al futuro para evitar que el hijo de Marty cometa un crimen, pero alteran accidentalmente el tiempo y deben corregir los errores.',
                'release_date' => '1989-11-22',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Regreso+al+futuro+II.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Regreso al futuro III',
                'description' => 'Marty viaja al Viejo Oeste para salvar al Doc de un destino fatal, enfrentándose a peligros de la época mientras intentan encontrar una forma de regresar al futuro.',
                'release_date' => '1990-05-25',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Regreso+al+futuro+III.webp'
            ]
        ];

        Film::insert($films);
    }
}