<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ScoobyDoo extends Seeder
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
                'title' => 'Scooby-Doo! La película',
                'description' => 'En Scooby-Doo! La película, Scooby-Doo y su pandilla resuelven un misterio en una isla misteriosa, donde el equipo investiga extraños sucesos en un parque de atracciones. Durante su aventura, descubren que el lugar está lleno de fantasmas y criaturas, lo que obliga a la pandilla a enfrentarse a su miedo y descubrir la verdad detrás de los aterradores sucesos. La película mezcla acción real con los clásicos personajes animados, manteniendo el humor característico.',
                'release_date' => '2002-06-14',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scooby-Doo 2: Monstruos Desatados',
                'description' => 'En Scooby-Doo 2: Monstruos Desatados, Scooby-Doo y la pandilla se enfrentan a un nuevo misterio cuando un villano roba las máscaras de los monstruos más temidos y los libera para que aterroricen la ciudad. La pandilla de misterio debe resolver el caso antes de que la ciudad quede completamente destruida por los monstruos descontrolados. Con acción, humor y las clásicas travesuras de Scooby, la película ofrece una nueva aventura llena de suspenso y momentos divertidos.',
                'release_date' => '2004-03-26',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scooby-Doo! El fantasma del festival',
                'description' => 'Scooby-Doo! El fantasma del festival lleva a la pandilla a un festival de cine en el que un fantasma misterioso está causando estragos. Mientras investigan, descubren que los sucesos extraños están relacionados con un antiguo secreto del cine y una leyenda que se remonta a años atrás. Scooby, Shaggy y el resto del equipo deberán resolver el misterio, enfrentarse al fantasma y salvar el festival, mientras disfrutan de su clásica mezcla de comedia y aventura.',
                'release_date' => '2010-10-16',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scooby-Doo! La leyenda del fantasma de la ópera',
                'description' => 'Scooby-Doo! La leyenda del fantasma de la ópera sigue a la pandilla mientras resuelven un misterio en un antiguo teatro. Cuando empiezan a ocurrir sucesos extraños, la pandilla descubre que el teatro está embrujado por un fantasma que acecha entre bambalinas. Mientras investigan, Scooby-Doo y su equipo se enfrentan a pistas falsas, persecuciones espeluznantes y un misterio cada vez más enredado. La película mezcla la emoción del clásico fantasma con el toque cómico y aventurero de Scooby-Doo.',
                'release_date' => '2010-02-16',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scooby-Doo! y la maldición del monstruo del lago Ness',
                'description' => 'En Scooby-Doo! y la maldición del monstruo del lago Ness, la pandilla viaja a Escocia para investigar los rumores sobre el legendario monstruo del Lago Ness. Al llegar, descubren que el monstruo es real, pero no es lo que parece. La pandilla se embarca en una aventura para desentrañar el misterio y salvar el lago de una amenaza aún mayor. Con la mezcla clásica de comedia, acción y misterio, la película ofrece una emocionante aventura ambientada en uno de los mitos más famosos del mundo.',
                'release_date' => '2010-11-09',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Scooby+Doo+y+La+Maldición+del+Monstruo+del+Lago+(2010).mp4',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scooby-Doo! y la isla de los zombis',
                'description' => 'Scooby-Doo! y la isla de los zombis lleva a la pandilla a una isla deshabitada, donde un misterioso mal acecha. La isla está plagada de extraños zombis, y Scooby y su equipo deben descubrir la causa detrás de la maldición antes de que sea demasiado tarde. A medida que resuelven pistas y se enfrentan a peligros, los amigos se enfrentan a criaturas espeluznantes y desvelan una conspiración que amenaza con liberar el caos en todo el mundo. Aventura y suspenso se combinan en esta emocionante historia.',
                'release_date' => '1998-10-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Scooby-Doo+En+La+Isla+De+Los+Zombis+(1998).mp4',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Scooby-Doo! y la leyenda del fantasma de Arabia',
                'description' => 'En Scooby-Doo! y la leyenda del fantasma de Arabia, Scooby y la pandilla se encuentran en el desierto árabe, donde deben resolver un misterio relacionado con un antiguo fantasma. Mientras exploran un antiguo palacio, descubren secretos del pasado y se enfrentan a criaturas misteriosas en su búsqueda por desvelar la identidad del fantasma que aterroriza la zona. La película combina magia, misterio y el humor característico de los personajes para resolver el enigma.',
                'release_date' => '1994-09-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Scooby-Doo+En+Noches+De+Arabia+(1994).mkv',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
