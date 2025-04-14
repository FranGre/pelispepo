<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Transformers extends Seeder
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
                'title' => 'Transformers',
                'description' => 'La lucha entre los Autobots y Decepticons llega a la Tierra, donde un joven llamado Sam Witwicky se ve atrapado en este conflicto, con el destino del planeta en juego. Los robots gigantes deben encontrar un artefacto que puede cambiar el curso de la guerra.',
                'release_date' => '2007-07-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Transformers.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Transformers: La venganza de los caídos',
                'description' => 'Tras la batalla en el desierto, Sam descubre un fragmento del Allspark que le da visiones del futuro. Mientras los Autobots y Decepticons se enfrentan nuevamente, Sam se convierte en la clave para detener una amenaza global.',
                'release_date' => '2009-06-24',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Transformers_La+Venganza+De+Los+Caídos+(2009).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Transformers-+La+venganza+de+los+cai%CC%81dos.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Transformers: El lado oscuro de la luna',
                'description' => 'Los Autobots descubren que en la luna se encuentra un antiguo secreto que puede cambiar el destino de la humanidad. La guerra entre Autobots y Decepticons escala a nuevas alturas, mientras los humanos se ven atrapados en el conflicto.',
                'release_date' => '2011-06-29',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Transformers-+El+lado+oscuro+de+la+luna.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Transformers: La era de la extinción',
                'description' => 'Cuatro años después de la batalla de Chicago, los Autobots son perseguidos por el gobierno. Un inventor encuentra a Optimus Prime y juntos deben luchar contra una nueva amenaza que busca destruir a la humanidad.',
                'release_date' => '2014-06-27',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Transformers_La_Era_de_la_Extinción.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Transformers-+La+era+de+la+extincio%CC%81n.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Transformers: El último caballero',
                'description' => 'Optimus Prime ha traicionado a los Autobots. Los humanos y Transformers deben unirse para evitar el apocalipsis, mientras se desvela un misterio que conecta la historia de los Transformers con la de la humanidad.',
                'release_date' => '2017-06-23',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Transformers_+El+Último+Caballero+(2017).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Transformers-+El+u%CC%81ltimo+caballero.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Transformers: Bumblebee',
                'description' => 'En un refugio en California, un joven llamado Charlie encuentra a Bumblebee, un Autobot herido que se convierte en su amigo. Juntos deben protegerse de los Decepticons y evitar que el mundo descubra la existencia de los Transformers.',
                'release_date' => '2018-12-21',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Bumblebee.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Transformers: El despertar de las bestias',
                'description' => 'En esta nueva entrega, los Autobots se enfrentan a nuevos enemigos: los Terrorcons. Con la ayuda de los Maximals, una especie de Transformers animales, deben evitar una amenaza global que pone en peligro la Tierra.',
                'release_date' => '2023-06-09',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Transformers-+El+despertar+de+las+bestias.webp'
            ]
        ];

        Film::insert($films);
    }
}
