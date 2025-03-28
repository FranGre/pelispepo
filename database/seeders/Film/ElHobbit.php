<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ElHobbit extends Seeder
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
                'title' => 'El hobbit: Un viaje inesperado',
                'description' => 'Bilbo Bolsón, un hobbit tranquilo, se ve inesperadamente arrastrado a una aventura épica junto a un grupo de enanos para recuperar el reino perdido de Erebor, que está en manos del dragón Smaug. A lo largo de su viaje, Bilbo encuentra criaturas extraordinarias, incluyendo un misterioso anillo que cambiará su destino.',
                'release_date' => '2012-12-14',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El hobbit: La desolación de Smaug',
                'description' => 'Bilbo y los enanos continúan su viaje hacia la Montaña Solitaria, mientras enfrentan peligros como el bosque de Mirkwood y el temible dragón Smaug. Bilbo, a su vez, se enfrenta a la creciente sombra del mal y debe tomar decisiones que afectarán el destino de todos.',
                'release_date' => '2013-12-13',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El hobbit: La batalla de los 5 ejércitos',
                'description' => 'Con la batalla final por Erebor a la vista, las fuerzas de la oscuridad se reúnen contra los hombres, elfos y enanos. Bilbo se encuentra atrapado en medio del conflicto, mientras Smaug es derrotado y la verdadera amenaza para la Tierra Media se desvela. La guerra por el futuro de la Tierra Media se desata en una épica confrontación.',
                'release_date' => '2014-12-17',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
