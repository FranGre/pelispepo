<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Predator extends Seeder
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
                'title' => 'Predator',
                'description' => 'Un grupo de fuerzas especiales se encuentra con un cazador alienígena que está acechando y cazando a los miembros del grupo en la jungla de América Central.',
                'release_date' => '1987-06-12',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Predator 2',
                'description' => 'En Los Ángeles, en plena ola de calor y crimen, un detective se enfrenta a un Predator que está cazando a los traficantes de drogas en la ciudad.',
                'release_date' => '1990-11-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien vs Predator',
                'description' => 'Un equipo de científicos descubre una antigua pirámide bajo la Antártida, pero pronto se encuentran en medio de una batalla mortal entre los Aliens y los Predators.',
                'release_date' => '2004-08-13',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien vs Predator 2',
                'description' => 'Los Aliens y los Predators se enfrentan en una pequeña ciudad estadounidense, mientras un grupo de sobrevivientes intenta escapar del caos mortal.',
                'release_date' => '2007-12-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Predators',
                'description' => 'Un grupo de humanos es secuestrado y llevado a un planeta lejano, donde deben luchar por sobrevivir contra un grupo de Predators que cazan a los humanos como su presa.',
                'release_date' => '2010-07-09',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Predator',
                'description' => 'Un grupo de exsoldados y un científico deben enfrentarse a una nueva amenaza alienígena en un paisaje rural. Un Predator aún más avanzado que nunca está cazando a los humanos.',
                'release_date' => '2018-09-14',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Predator: La presa',
                'description' => 'En el Norte de América del siglo XVIII, un joven guerrero comanche se enfrenta a un Predator avanzado mientras protege a su tribu en una batalla a vida o muerte.',
                'release_date' => '2022-08-05',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}