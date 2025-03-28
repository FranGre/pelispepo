<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class FastAndFurious extends Seeder
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
                'title' => 'Fast & Furious 1',
                'description' => 'Dominic Toretto, un experto en carreras ilegales, y Brian O\'Conner, un agente encubierto, se unen para desmantelar una red de robo de autos. La carrera comienza en las calles de Los Ángeles.',
                'release_date' => '2001-06-22',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 2',
                'description' => 'Brian O\'Conner regresa, esta vez en Miami, donde se asocia con un viejo amigo, Roman Pierce, para capturar a un peligroso criminal involucrado en carreras callejeras y actividades ilícitas.',
                'release_date' => '2003-06-06',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 3: Tokyo Drift',
                'description' => 'Sean Boswell, un joven que se muda a Tokio, se ve envuelto en el mundo de las carreras drift. Junto a su mentor, Han, debe enfrentar la competencia mientras aprende el arte del drift.',
                'release_date' => '2006-06-16',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 4: Aún más rápido',
                'description' => 'Dominic Toretto regresa a Los Ángeles y se une a Brian O\'Conner para detener a un narcotraficante. Ambos se ven obligados a enfrentarse a los fantasmas del pasado mientras corren a través de la peligrosa ciudad.',
                'release_date' => '2009-04-03',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 5',
                'description' => 'Dominic Toretto y Brian O\'Conner se asocian con otros corredores y criminales para llevar a cabo el robo más grande en la historia de Río de Janeiro. Pero el agente Luke Hobbs está tras ellos.',
                'release_date' => '2011-04-29',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 6',
                'description' => 'El equipo de Toretto debe unirse una vez más, esta vez para detener a un grupo de mercenarios con habilidades en carreras de alto rendimiento. Su misión los lleva a diferentes partes del mundo.',
                'release_date' => '2013-05-24',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 7',
                'description' => 'El equipo se enfrenta a un nuevo enemigo, Deckard Shaw, quien busca vengarse de la muerte de su hermano. El equipo debe luchar para salvarse mientras enfrentan nuevos retos.',
                'release_date' => '2015-04-03',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 8',
                'description' => 'Cuando Dom y Letty se ven atrapados por un misterioso villano, el equipo debe unirse para enfrentarse a una amenaza global mientras enfrentan traiciones y secretos.',
                'release_date' => '2017-04-14',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious 9',
                'description' => 'El equipo se enfrenta a una nueva amenaza cuando el hermano perdido de Dom, Jakob, aparece con un plan para destruir todo lo que el equipo ha construido. Enfrentan desafíos extremos y viejos enemigos.',
                'release_date' => '2021-06-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fast & Furious: Hobbs & Shaw',
                'description' => 'Los agentes de la ley Luke Hobbs y Deckard Shaw deben unir fuerzas para detener a un terrorista internacional que tiene acceso a una peligrosa tecnología. A pesar de sus diferencias, ambos lucharán juntos por el bien común.',
                'release_date' => '2019-08-02',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
