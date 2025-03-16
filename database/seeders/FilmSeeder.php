<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class FilmSeeder extends Seeder
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
                'title' => 'Batman Begins',
                'description' => 'Tras presenciar el asesinato de sus padres, Bruce Wayne recorre el mundo en busca de respuestas sobre el crimen y la justicia. Entrenado por la Liga de las Sombras, rechaza su ideología y regresa a Gotham, donde adopta la identidad de Batman para luchar contra la corrupción. Con la ayuda de Alfred y Lucius Fox, enfrenta a Carmine Falcone, al Espantapájaros y a Ra’s al Ghul, quien planea destruir la ciudad. Bruce debe superar sus miedos y convertirse en el héroe que Gotham necesita.',
                'release_date' => '2005-06-15',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Batman: El Caballero Oscuro',
                'description' => 'Batman, el fiscal Harvey Dent y el teniente Gordon trabajan para erradicar el crimen en Gotham. Sin embargo, un nuevo enemigo surge: el Joker, un anarquista despiadado que desata el caos con su retorcida filosofía. Mientras Batman enfrenta dilemas morales, el Joker manipula a Dent hasta convertirlo en Dos Caras. Gotham se sumerge en el caos y Batman debe hacer un sacrificio final, asumiendo la culpa por los crímenes de Dent para preservar la esperanza en la ciudad.',
                'release_date' => '2008-07-18',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Batman: La Leyenda Renace',
                'description' => 'Ocho años después de asumir la culpa por los crímenes de Harvey Dent, Bruce Wayne vive recluido mientras Gotham disfruta de una paz frágil. Sin embargo, la llegada de Bane, un mercenario brutal, pone en jaque la ciudad. Batman regresa, pero es derrotado y encarcelado. Mientras Bane impone su reinado de terror, Bruce debe recuperarse y resurgir. Con la ayuda de Selina Kyle y sus aliados, enfrenta su batalla final para salvar Gotham, sacrificándolo todo para convertirse en una leyenda.',
                'release_date' => '2012-07-20',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man 1',
                'description' => 'Después de ser mordido por una araña genéticamente modificada, Peter Parker desarrolla habilidades sobrehumanas. Al perder a su tío Ben por un crimen que pudo evitar, adopta la identidad de Spider-Man para luchar contra el mal. Sin embargo, debe enfrentar al Duende Verde, quien amenaza a la ciudad y a sus seres queridos. En el camino, Peter aprende que "un gran poder conlleva una gran responsabilidad.',
                'release_date' => '2002-05-03',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man 2',
                'description' => 'Peter Parker lucha por equilibrar su vida como estudiante y héroe, lo que le hace cuestionar su papel como Spider-Man. Mientras tanto, el brillante científico Otto Octavius se convierte en el villano Doctor Octopus tras un fallido experimento. Peter debe recuperar la fe en sí mismo para detener la amenaza y proteger a Mary Jane, quien finalmente descubre su identidad.',
                'release_date' => '2004-06-30',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Spider-Man 3',
                'description' => 'Peter disfruta del éxito como Spider-Man, pero su relación con Mary Jane se complica cuando un simbionte alienígena amplifica su lado oscuro. Mientras tanto, Flint Marko, el verdadero asesino de su tío Ben, se convierte en Sandman, y Harry Osborn busca venganza como el nuevo Duende Verde. Corrompido por el poder, Peter debe redimirse y enfrentarse a sus enemigos, incluido Venom, en una batalla definitiva.',
                'release_date' => '2007-05-04',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y la Piedra Filosofal',
                'description' => 'Harry Potter, un niño huérfano, descubre que es un mago y que fue aceptado en Hogwarts. Allí hace amigos, aprende magia y descubre la verdad sobre sus padres y el villano Lord Voldemort. Junto a Ron y Hermione, enfrenta pruebas para evitar que la Piedra Filosofal caiga en manos equivocadas.',
                'release_date' => '2001-11-16',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y la Cámara Secreta',
                'description' => 'En su segundo año, Harry descubre que la Cámara de los Secretos ha sido abierta, liberando un monstruo que ataca a los estudiantes. Con la ayuda de sus amigos, enfrenta al heredero de Slytherin y al basilisco, descubriendo más sobre Voldemort y su conexión con él.',
                'release_date' => '2002-11-15',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y el Prisionero de Azkaban',
                'description' => 'Harry regresa a Hogwarts con la amenaza de Sirius Black, un peligroso fugitivo supuestamente aliado de Voldemort. A medida que la verdad se revela, descubre la traición de Peter Pettigrew y el sacrificio de sus padres. Con la ayuda de un giratiempo, salva a Sirius y a Buckbeak.',
                'release_date' => '2004-06-04',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y el Cáliz de Fuego',
                'description' => 'Harry es misteriosamente elegido para competir en el Torneo de los Tres Magos, enfrentando peligrosas pruebas. Durante la final, es transportado a un cementerio donde presencia el regreso de Voldemort. Escapa, pero el mundo mágico se da cuenta de que la guerra ha comenzado.',
                'release_date' => '2005-11-18',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y la Orden del Fénix',
                'description' => 'El Ministerio de Magia niega el regreso de Voldemort, desacreditando a Harry y Dumbledore. Mientras Dolores Umbridge impone un régimen dictatorial en Hogwarts, Harry forma "El Ejército de Dumbledore". Finalmente, enfrenta a Voldemort en el Ministerio, confirmando la verdad.',
                'release_date' => '2007-07-11',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y el Misterio del Príncipe',
                'description' => 'Dumbledore le muestra a Harry recuerdos sobre el pasado de Voldemort, revelando la existencia de los Horrocruxes. Mientras tanto, Draco Malfoy recibe una misión oscura y el amor florece en Hogwarts. La historia culmina con la trágica muerte de Dumbledore a manos de Snape.',
                'release_date' => '2009-07-15',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y las Reliquias de la Muerte - Parte 1',
                'description' => 'Harry, Ron y Hermione huyen mientras buscan y destruyen los Horrocruxes de Voldemort. La desesperación y la pérdida afectan su amistad, pero descubren la leyenda de las Reliquias de la Muerte. La película culmina con la captura de Harry y la trágica muerte de Dobby.',
                'release_date' => '2010-11-19',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Harry Potter y las Reliquias de la Muerte - Parte 2',
                'description' => 'La batalla final por Hogwarts comienza mientras Harry y sus aliados luchan contra las fuerzas de Voldemort. Descubre la verdad sobre Snape y su destino como el Elegido. En el enfrentamiento final, Voldemort es derrotado y la paz regresa al mundo mágico.',
                'release_date' => '2011-07-15',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Juegos del Hambre',
                'description' => 'En un futuro distópico, el Capitolio obliga a los distritos a enviar tributos para un sangriento reality show. Katniss Everdeen se ofrece como voluntaria para salvar a su hermana y junto a Peeta Mellark lucha por sobrevivir. Su desafío al sistema con un acto de amor desafía el poder del Capitolio.',
                'release_date' => '2012-03-23',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Juegos del Hambre: En Llamas',
                'description' => 'Katniss y Peeta, ahora símbolos de esperanza, son obligados a participar en el Vasallaje de los Veinticinco, una edición especial de los Juegos con antiguos vencedores. En medio de traiciones y alianzas, descubren un plan secreto para derrocar al Capitolio.',
                'release_date' => '2013-11-22',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Juegos del Hambre: Sinsajo - Parte 1',
                'description' => 'Katniss se convierte en el rostro de la rebelión contra el Capitolio, mientras Peeta es prisionero de Snow. La guerra se intensifica y Katniss lucha con el peso de su papel como líder y las decisiones difíciles que enfrenta en la revolución.',
                'release_date' => '2014-11-21',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Juegos del Hambre: Sinsajo - Parte 2',
                'description' => 'La guerra alcanza su clímax mientras Katniss y sus aliados avanzan hacia el Capitolio para derrocar a Snow. Sin embargo, descubre que la lucha por el poder es más compleja de lo que imaginaba. En el final, debe tomar una última decisión para definir el futuro de Panem.',
                'release_date' => '2015-11-20',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Juegos del Hambre: Balada de Pájaros Cantores y Serpientes',
                'description' => 'Años antes de los eventos de la saga original, se explora la juventud de Coriolanus Snow y su rol como mentor en los Décimos Juegos del Hambre. Su relación con Lucy Gray Baird, tributo del Distrito 12, pone a prueba su moralidad y su camino hacia el poder.',
                'release_date' => '2023-11-17',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Un Lugar en Silencio',
                'description' => 'En un mundo postapocalíptico, criaturas ciegas pero con una audición ultrasensible han llevado a la humanidad al borde de la extinción. La familia Abbott sobrevive en silencio, comunicándose con lenguaje de señas. Sin embargo, cuando Evelyn debe dar a luz, el peligro se intensifica. Mientras luchan por su vida, descubren una forma de combatir a las criaturas.',
                'release_date' => '2018-04-06',
                'url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Un Lugar en Silencio: Parte II',
                'description' => 'Tras la muerte de Lee, Evelyn y sus hijos buscan refugio en un nuevo mundo devastado. En su viaje, encuentran a Emmett, un viejo amigo que ha perdido la esperanza. Regan, la hija sorda, se embarca en una misión para transmitir la debilidad de los monstruos y dar esperanza a los sobrevivientes, mientras la amenaza sigue acechando.',
                'release_date' => '2021-05-28',
                'url' => ''
            ]
        ];

        Film::insert($films);
    }
}
