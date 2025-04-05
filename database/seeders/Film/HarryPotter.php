<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class HarryPotter extends Seeder
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
                'title' => 'Harry Potter y la Piedra Filosofal',
                'description' => 'Harry Potter, un niño huérfano, descubre que es un mago y que fue aceptado en Hogwarts. Allí hace amigos, aprende magia y descubre la verdad sobre sus padres y el villano Lord Voldemort. Junto a Ron y Hermione, enfrenta pruebas para evitar que la Piedra Filosofal caiga en manos equivocadas.',
                'release_date' => '2001-11-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry_Potter_y_la_piedra_filosofal.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y la Cámara Secreta',
                'description' => 'En su segundo año, Harry descubre que la Cámara de los Secretos ha sido abierta, liberando un monstruo que ataca a los estudiantes. Con la ayuda de sus amigos, enfrenta al heredero de Slytherin y al basilisco, descubriendo más sobre Voldemort y su conexión con él.',
                'release_date' => '2002-11-15',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry+Potter+y+la+Ca%CC%81mara+Secreta.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y el Prisionero de Azkaban',
                'description' => 'Harry regresa a Hogwarts con la amenaza de Sirius Black, un peligroso fugitivo supuestamente aliado de Voldemort. A medida que la verdad se revela, descubre la traición de Peter Pettigrew y el sacrificio de sus padres. Con la ayuda de un giratiempo, salva a Sirius y a Buckbeak.',
                'release_date' => '2004-06-04',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry+Potter+y+el+Prisionero+de+Azkaban.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y el Cáliz de Fuego',
                'description' => 'Harry es misteriosamente elegido para competir en el Torneo de los Tres Magos, enfrentando peligrosas pruebas. Durante la final, es transportado a un cementerio donde presencia el regreso de Voldemort. Escapa, pero el mundo mágico se da cuenta de que la guerra ha comenzado.',
                'release_date' => '2005-11-18',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry+Potter+y+el+ca%CC%81liz+de+fuego.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y la Orden del Fénix',
                'description' => 'El Ministerio de Magia niega el regreso de Voldemort, desacreditando a Harry y Dumbledore. Mientras Dolores Umbridge impone un régimen dictatorial en Hogwarts, Harry forma "El Ejército de Dumbledore". Finalmente, enfrenta a Voldemort en el Ministerio, confirmando la verdad.',
                'release_date' => '2007-07-11',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry+Potter+y+la+Orden+del+Fe%CC%81nix.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y el Misterio del Príncipe',
                'description' => 'Dumbledore le muestra a Harry recuerdos sobre el pasado de Voldemort, revelando la existencia de los Horrocruxes. Mientras tanto, Draco Malfoy recibe una misión oscura y el amor florece en Hogwarts. La historia culmina con la trágica muerte de Dumbledore a manos de Snape.',
                'release_date' => '2009-07-15',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry_Potter_y_el_misterio_del_pr%C3%ADncipe.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y las Reliquias de la Muerte - Parte 1',
                'description' => 'Harry, Ron y Hermione huyen mientras buscan y destruyen los Horrocruxes de Voldemort. La desesperación y la pérdida afectan su amistad, pero descubren la leyenda de las Reliquias de la Muerte. La película culmina con la captura de Harry y la trágica muerte de Dobby.',
                'release_date' => '2010-11-19',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry_Potter_y_las_Reliquias_de_la_Muerte_Parte_1.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y las Reliquias de la Muerte - Parte 2',
                'description' => 'La batalla final por Hogwarts comienza mientras Harry y sus aliados luchan contra las fuerzas de Voldemort. Descubre la verdad sobre Snape y su destino como el Elegido. En el enfrentamiento final, Voldemort es derrotado y la paz regresa al mundo mágico.',
                'release_date' => '2011-07-15',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Harry_Potter_y_las_Reliquias_de_la_Muerte_Parte_2.webp'
            ]
        ];

        Film::insert($films);
    }
}
