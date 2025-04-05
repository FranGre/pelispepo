<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LaMonja extends Seeder
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
                'title' => 'La monja',
                'description' => 'En este spin-off de "El Conjuro", una monja demoníaca aterradora es el centro de la historia, causando terror en un convento en Rumania.',
                'release_date' => '2018-09-07',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+monja.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La monja II',
                'description' => 'La monja demoníaca regresa para aterrorizar a nuevos personajes, ahora en una serie de espeluznantes eventos en un convento en Francia.',
                'release_date' => '2023-09-08',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+monja+2.webp'
            ]
        ];

        Film::insert($films);
    }
}
