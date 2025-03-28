<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ElSenorDeLosAnillos extends Seeder
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
                'title' => 'El señor de los anillos: La comunidad del anillo',
                'description' => 'Frodo Bolsón, un hobbit joven, se embarca en una peligrosa misión para destruir el Anillo Único, un objeto maldito con el poder de dominar la Tierra Media. Con la ayuda de una comunidad formada por hombres, elfos, enanos y otros, Frodo deberá atravesar tierras peligrosas mientras el mal se extiende por todo el mundo.',
                'release_date' => '2001-12-19',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El señor de los anillos: Las dos torres',
                'description' => 'Mientras Frodo y Sam continúan su viaje hacia Mordor para destruir el Anillo Único, la guerra por la Tierra Media se intensifica. Aragorn, Legolas y Gimli luchan en la batalla de Helm’s Deep para detener las fuerzas de Saruman, mientras Gollum acecha a Frodo y Sam con su traicionera influencia.',
                'release_date' => '2002-12-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El señor de los anillos: El retorno del rey',
                'description' => 'En el clímax de la saga, Frodo y Sam se acercan a su destino final en el Monte del Destino para destruir el Anillo Único. Mientras tanto, las fuerzas del mal, lideradas por Sauron, se preparan para lanzar un ataque masivo contra el reino de Gondor. Los héroes de la comunidad se enfrentan a sus últimos desafíos en una batalla épica por la supervivencia de la Tierra Media.',
                'release_date' => '2003-12-17',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
