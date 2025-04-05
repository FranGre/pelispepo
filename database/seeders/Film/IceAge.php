<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class IceAge extends Seeder
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
                'title' => 'Ice Age',
                'description' => 'En la era del hielo, un mamut llamado Manny, un perezoso llamado Sid y un tigre dientes de sable llamado Diego, se unen para devolver a un bebé humano a su tribu. Mientras intentan salvar al niño, descubren que deben enfrentarse a otros animales y a una peligrosa tormenta de nieve.',
                'release_date' => '2002-03-15',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ice+Age.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ice Age 2: El deshielo',
                'description' => 'El clima de la era del hielo comienza a cambiar, y el hielo que cubre la Tierra se derrite. Manny, Sid y Diego deben encontrar un modo de sobrevivir al deshielo. Durante su viaje, encuentran a un nuevo personaje, Ellie, quien resulta ser un mamut como Manny.',
                'release_date' => '2006-03-31',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ice+Age+2-+El+deshielo.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ice Age 3: El origen de los dinosaurios',
                'description' => 'Manny y su grupo descubren un mundo oculto debajo del hielo, donde viven dinosaurios. Durante su aventura, intentan rescatar a los hijos de Ellie y enfrentar los peligros de esta nueva era prehistórica.',
                'release_date' => '2009-07-01',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ice+Age+3-+El+origen+de+los+dinosaurios.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ice Age 4: La formación de los continentes',
                'description' => 'El continente de la Tierra se empieza a dividir y Manny, Sid, Diego y el resto del grupo deben embarcarse en una aventura a través de los nuevos mares y tierras. En el camino, enfrentan un pirata y nuevos desafíos mientras el mundo se transforma.',
                'release_date' => '2012-07-13',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ice+Age+4-+La+formacio%CC%81n+de+los+continentes.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ice Age: El gran cataclismo',
                'description' => 'Manny, Sid, Diego y el resto de la manada enfrentan una serie de desastres naturales provocados por un asteroide que se aproxima a la Tierra. Juntos deben evitar la catástrofe y encontrar un lugar seguro para sobrevivir.',
                'release_date' => '2016-07-22',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ice+Age-+El+gran+cataclismo.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ice Age: Las aventuras de Buck',
                'description' => 'Sid, Manny, Diego y el resto de la manada se embarcan en nuevas aventuras en el mundo subterráneo, donde Buck, el valiente y algo excéntrico animal, les ayuda a salvar a su mundo de un peligroso villano.',
                'release_date' => '2022-01-28',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Ice+Age-+Las+aventuras+de+Buck.webp'
            ]
        ];

        Film::insert($films);
    }
}
