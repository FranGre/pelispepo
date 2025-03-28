<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ElCorredorDelLaberinto extends Seeder
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
                'title' => 'El corredor del laberinto',
                'description' => 'Un joven llamado Thomas se despierta en un ascensor sin recordar su nombre ni su pasado. Cuando llega a un extraño lugar llamado El Laberinto, descubre que él y otros chicos deben encontrar una salida mientras enfrentan criaturas mortales. Thomas se convierte en clave para escapar, pero el camino no será fácil.',
                'release_date' => '2014-09-19',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El corredor del laberinto: Las pruebas',
                'description' => 'Después de escapar del Laberinto, Thomas y sus amigos se enfrentan a nuevas pruebas y obstáculos mientras luchan contra la organización llamada WCKD. Descubren más sobre sus orígenes y el destino del mundo, mientras intentan sobrevivir a las traiciones y a los nuevos peligros que surgen a su alrededor.',
                'release_date' => '2015-09-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El corredor del laberinto: La cura mortal',
                'description' => 'En el emocionante final de la saga, Thomas y sus amigos deben enfrentarse a una batalla final para salvar a la humanidad de la destrucción. Mientras se infiltran en el cuartel general de WCKD, descubren la verdad detrás de la enfermedad mortal y luchan para obtener la cura que podría cambiarlo todo.',
                'release_date' => '2018-01-26',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
