<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Spiderman extends Seeder
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
                'title' => 'Spider-Man',
                'description' => 'Peter Parker, un joven que obtiene habilidades sobrehumanas tras ser mordido por una araña radiactiva, se enfrenta a su primer gran desafío como superhéroe. Mientras lidia con su vida como adolescente, debe enfrentarse al Duende Verde, quien amenaza tanto su vida personal como la seguridad de la ciudad. La película toca temas de sacrificio, la lucha interna entre el bien y el mal, y el peso de ser un héroe.',
                'release_date' => '2002-05-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/spiderman.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man 2',
                'description' => 'Peter Parker lucha con la idea de dejar su vida como Spider-Man para poder vivir una vida normal. A medida que enfrenta sus propios dilemas emocionales, un nuevo villano aparece: el Doctor Octopus. Mientras trata de salvar la ciudad de la destrucción, Peter se da cuenta de que ser un héroe requiere sacrificios. La película profundiza en la responsabilidad que conlleva ser un superhéroe y el impacto personal de las decisiones difíciles.',
                'release_date' => '2004-06-30',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Spider-Man-2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man 3',
                'description' => 'La vida de Peter Parker se complica cuando tres nuevos enemigos emergen: Venom, Sandman y el Duende Verde. A medida que enfrenta sus demonios internos y sus deseos de venganza, Peter se ve consumido por el poder del simbiótico negro, lo que lo lleva a tomar decisiones erróneas que ponen en peligro todo lo que ama. La película explora temas de redención, el costo del poder y la lucha entre el bien y el mal.',
                'release_date' => '2007-05-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Spider-Man-3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'The Amazing Spider-Man',
                'description' => 'Peter Parker descubre secretos ocultos sobre la desaparición de sus padres, mientras se adapta a sus nuevos poderes tras ser mordido por una araña modificada genéticamente. La amenaza del Lagarto, un hombre transformado por un experimento fallido, lo lleva a enfrentarse a un dilema moral sobre el uso de sus habilidades. La película explora los orígenes del héroe y el precio de la responsabilidad.',
                'release_date' => '2012-07-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/The-Amazing-Spider-Man.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'The Amazing Spider-Man 2: El poder de Electro',
                'description' => 'Peter Parker enfrenta nuevos desafíos cuando se cruza con Electro, un villano con el poder de controlar la electricidad. Mientras trata de descubrir más sobre la conexión de su padre con Oscorp, Peter se enfrenta a dilemas personales y descubre que su rol como Spider-Man no solo lo pone en peligro a él, sino también a sus seres queridos. La película profundiza en las consecuencias de las decisiones tomadas por Peter.',
                'release_date' => '2014-05-02',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/The-Amazing-Spider-Man-2-El-poder-de-Electro.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man: Homecoming',
                'description' => 'Peter Parker regresa a casa después de los eventos de "Capitán América: Civil War", decidido a probar su valía como superhéroe. Mientras lucha por equilibrar su vida escolar y su vida como Spider-Man, se enfrenta al Buitre, un villano que amenaza la seguridad de la ciudad. La película explora el crecimiento personal de Peter y su lucha por encontrar su propio camino como héroe.',
                'release_date' => '2017-07-07',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Spider-Man-+Homecoming.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man: No Way Home',
                'description' => 'Cuando Peter Parker busca la ayuda de Doctor Strange para borrar la revelación de su identidad secreta, el multiverso se descontrola, trayendo versiones alternativas de Spider-Man y otros villanos. Peter debe enfrentarse a los peligros del multiverso mientras intenta proteger a su mundo y a sus seres queridos. La película explora el impacto del multiverso y el sacrificio personal en aras del bien mayor.',
                'release_date' => '2021-12-17',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Spiderman_No_Way_Home.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man: Un nuevo universo',
                'description' => 'Miles Morales, un joven que adquiere habilidades de Spider-Man en su propio universo, se ve arrastrado a una aventura épica cuando se abre el multiverso. Junto a versiones alternativas de Spider-Man, debe enfrentarse a una amenaza que pone en peligro a todos los universos. La película explora la identidad, el sacrificio y la valentía, a la vez que ofrece una nueva visión en el cine de animación.',
                'release_date' => '2018-12-14',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Spider-Man-Un-nuevo-universo.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man: Lejos de casa',
                'description' => 'Después de los eventos de "Avengers: Endgame", Peter Parker viaja a Europa con su clase, pero se encuentra con una nueva amenaza: Mysterio, un villano con la habilidad de crear ilusiones. Peter lucha con el legado de Tony Stark y la presión de ser el nuevo héroe que el mundo necesita. La película explora el duelo, la aceptación y la responsabilidad que viene con ser un superhéroe.',
                'release_date' => '2019-07-02',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Spider-Man-Lejos-de-casa.webp'
            ]
        ];

        Film::insert($films);
    }
}