<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Venom extends Seeder
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
                'title' => 'Venom',
                'description' => 'Eddie Brock, un periodista de investigación, se encuentra con un parásito extraterrestre que le otorga habilidades extraordinarias. Tras una lucha interna, Eddie y el simbiótico Venom se convierten en una unidad que lucha por la justicia mientras enfrentan amenazas letales.',
                'release_date' => '2018-10-05',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Venom: Let There Be Carnage',
                'description' => 'Eddie Brock, junto con Venom, se enfrenta a Cletus Kasady, un asesino en serie que se convierte en el peligroso Carnage. La batalla entre los dos simbióticos es inminente, mientras Eddie lucha por controlar a Venom y enfrentarse a una amenaza aún más peligrosa.',
                'release_date' => '2021-09-24',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Venom: El último baile',
                'description' => 'En esta secuela, Venom y Eddie Brock deben unirse para enfrentarse a un nuevo enemigo que representa una amenaza aún mayor. La batalla por la supervivencia alcanza nuevas dimensiones, mientras Venom y Eddie luchan por mantener el equilibrio entre el caos y la humanidad.',
                'release_date' => '2024-10-04',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
