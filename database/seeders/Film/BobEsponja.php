<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class BobEsponja extends Seeder
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
                'title' => 'Bob Esponja: La película',
                'description' => 'Bob Esponja y su mejor amigo Patricio viajan al fondo del mar para recuperar la corona robada del Rey Neptuno. Juntos enfrentan una serie de desafíos y se embarcan en una épica aventura para demostrar que incluso un simple "esponja" puede ser un héroe. Mientras tanto, enfrentan las malvadas maquinaciones de Plankton.',
                'release_date' => '2004-11-19',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Bob Esponja: Un héroe fuera del agua',
                'description' => 'Bob Esponja, Patricio, y sus amigos deben aventurarse fuera de las aguas de Fondo de Bikini para recuperar la fórmula secreta de la Cangreburger que ha sido robada. En su travesía por el mundo humano, se convierten en héroes y enfrentan nuevos villanos, todo mientras intentan salvar su restaurante y su hogar.',
                'release_date' => '2015-02-06',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Bob Esponja: Un héroe al rescate',
                'description' => 'Bob Esponja y sus amigos se embarcan en una nueva aventura para salvar a Fondo de Bikini de una crisis sin precedentes. Con la ayuda de nuevos aliados y enfrentándose a Plankton, deberán arriesgarlo todo para garantizar que la paz y el orden regresen a su hogar bajo el mar.',
                'release_date' => '2009-02-12',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Al rescate de Fondo de Bikini: La película',
                'description' => 'Fondo de Bikini está en peligro cuando un nuevo villano amenaza con destruir la ciudad. Bob Esponja y sus amigos se embarcan en una misión para salvar su hogar, enfrentándose a numerosos obstáculos en su camino. Con valentía, humor y amistad, lucharán para restaurar la paz en su mundo submarino.',
                'release_date' => '2020-07-31',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Plankton: La película',
                'description' => 'Plankton, el malvado dueño del restaurante Chum Bucket, decide finalmente conseguir lo que siempre ha querido: la fórmula secreta de la Cangreburger. En su intento por robar la receta, desata una serie de eventos caóticos en Fondo de Bikini, mientras Bob Esponja y sus amigos luchan para evitar que sus planes malignos tengan éxito.',
                'release_date' => '2022-12-02',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
