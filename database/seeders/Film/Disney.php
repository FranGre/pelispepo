<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Disney extends Seeder
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
                'title' => 'Bambi',
                'description' => 'Bambi, un pequeño cervatillo, debe aprender a vivir en el bosque tras la trágica muerte de su madre. A lo largo de su vida, enfrenta desafíos, conoce el amor y la amistad, y se convierte en el príncipe del bosque, enfrentando las dificultades de la vida con valentía.',
                'release_date' => '1942-08-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Dumbo',
                'description' => 'Dumbo, un elefante bebé con orejas gigantes, es objeto de burla en el circo. Sin embargo, descubrirá que sus orejas le permiten volar, lo que lo convierte en una estrella del espectáculo. Una historia de superación y aceptación personal.',
                'release_date' => '1941-10-23',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Blancanieves y los siete enanitos',
                'description' => 'Blancanieves, una princesa huye de su malvada madrastra que quiere deshacerse de ella. En su huida encuentra refugio con siete enanitos. Juntos, lucharán para derrotar a la reina y hacer que Blancanieves recupere su felicidad y amor.',
                'release_date' => '1937-12-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Saludos amigos',
                'description' => 'Mickey Mouse y sus amigos viajan a América Latina donde se sumergen en diferentes culturas y tradiciones, compartiendo historias y música. Esta película es una mezcla de entretenimiento y aprendizaje sobre la cultura latinoamericana.',
                'release_date' => '1942-02-06',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Pinocho',
                'description' => 'Pinocho es un muñeco de madera que sueña con ser un niño real. Tras varios errores y aventuras, aprende lo que significa ser valiente, honesto y tener un corazón puro. Un cuento sobre el crecimiento personal y la importancia de la bondad.',
                'release_date' => '1940-02-07',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fantasía',
                'description' => 'Una obra maestra que combina animación y música clásica. Diferentes segmentos presentan compositores como Beethoven y Stravinsky, que cobran vida a través de animaciones, llevando al espectador a un viaje visual y sonoro único.',
                'release_date' => '1940-11-13',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La dama y el vagabundo',
                'description' => 'La historia de un perro de raza alta llamado Lady, quien vive una vida cómoda y tranquila, y un perro callejero llamado Tramp. Juntos viven una serie de aventuras que les enseñan sobre el amor y la amistad en un mundo muy diferente al suyo.',
                'release_date' => '1955-06-22',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Cenicienta',
                'description' => 'Cenicienta, maltratada por su madrastra y hermanastras, tiene la oportunidad de asistir al baile real gracias a la magia de su hada madrina. En el baile, captura el corazón del príncipe, quien, tras una búsqueda, la encuentra y cambia su vida para siempre.',
                'release_date' => '1950-02-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La bella durmiente',
                'description' => 'Aurora, una princesa maldita por una hechicera, caerá en un profundo sueño tras pincharse el dedo con un huso. Solo un beso de amor verdadero podrá despertarla. Mientras tanto, sus amigos luchan para derrotar a la maldición y salvarla.',
                'release_date' => '1959-01-29',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Peter Pan',
                'description' => 'Peter Pan, un niño que nunca crece, lleva a Wendy y a sus hermanos al País de Nunca Jamás, donde viven aventuras con los Niños Perdidos, luchan contra el temido Capitán Garfio y aprenden el valor de la imaginación y la amistad.',
                'release_date' => '1953-02-05',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ritmo y melodia',
                'description' => 'Una película donde la música y la danza son las estrellas. A través de varios números musicales, se cuentan historias sobre la vida, el amor y la superación, todo bajo la dirección de la animación de Disney.',
                'release_date' => '1949-01-01',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alicia en el país de las maravillas',
                'description' => 'Alicia sigue al conejo blanco hasta un mundo fantástico y surrealista donde conoce personajes excéntricos como el Sombrerero Loco y la Reina de Corazones. En su viaje, aprende sobre la importancia de la curiosidad y el coraje.',
                'release_date' => '1951-07-28',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => '101 dálmatas',
                'description' => 'Pongo y Perdita, dos perros dálmatas, deben luchar por salvar a sus cachorros secuestrados por la malvada Cruella de Vil, quien quiere hacer un abrigo con sus pieles. Una historia de valentía, amistad y trabajo en equipo.',
                'release_date' => '1961-01-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El libro de la selva',
                'description' => 'Mowgli, un niño criado por lobos, tiene que enfrentarse a los peligros de la selva. Con la ayuda de sus amigos, Baloo el oso y Bagheera la pantera, se enfrenta a la amenaza del malvado tigre Shere Khan.',
                'release_date' => '1967-10-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los tres caballeros',
                'description' => 'Donald, José Carioca y Panchito buscan vivir nuevas aventuras en América Latina. A través de esta película, exploran la música y las tradiciones de diferentes países del continente, en un viaje lleno de alegría y ritmo.',
                'release_date' => '1944-02-06',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La espada en la piedra',
                'description' => 'El joven Arturo, con la ayuda de su tutor Merlín, lucha por convertirse en el rey de Inglaterra. Después de extraer la espada de la piedra, demuestra ser el elegido para gobernar, enfrentándose a desafíos y aprendiendo lecciones sobre la sabiduría y el coraje.',
                'release_date' => '1963-12-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El caldero mágico',
                'description' => 'El joven Taran busca escapar de la malvada bruja que quiere obtener el caldero mágico, que tiene el poder de crear un ejército de muertos. Acompañado de un cerdo profético y varios amigos, Taran deberá evitar que el caldero caiga en las manos equivocadas.',
                'release_date' => '1985-07-24',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Pocahontas',
                'description' => 'Pocahontas, una joven nativa americana, se encuentra con John Smith, un explorador inglés. A través de su relación, ambos deben superar los prejuicios y los conflictos entre sus pueblos, mientras buscan un entendimiento y respeto mutuo por la naturaleza y la vida.',
                'release_date' => '1995-06-23',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Policías y ratones',
                'description' => 'Un grupo de ratones detectives debe resolver un crimen en el mundo animal. Con la ayuda de sus habilidades y un gran sentido de la justicia, enfrentan a los villanos y demuestran que, sin importar el tamaño, todos pueden ser héroes.',
                'release_date' => '1999-03-19',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El zorro y el sabueso',
                'description' => 'Todd, un zorro huérfano, y Copper, un sabueso, se convierten en grandes amigos mientras son cachorros. Sin embargo, cuando crecen, sus naturalezas instintivas los ponen en conflicto. A pesar de las diferencias, su amistad perdura a lo largo de los años.',
                'release_date' => '1981-07-10',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El Rey León',
                'description' => 'Simba, un joven león, debe aprender a ser el rey que está destinado a ser, tras la muerte de su padre Mufasa. Acompañado de sus amigos Timón y Pumba, enfrenta retos y villanos, y descubre el significado de la vida, el amor y el coraje.',
                'release_date' => '1994-06-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La Sirenita',
                'description' => 'Ariel, una joven sirena, sueña con vivir en el mundo humano. Después de hacer un trato con la malvada bruja Úrsula, su vida se complica cuando se enamora de un príncipe humano. Ariel debe encontrar una manera de salvarse a sí misma y a su amor.',
                'release_date' => '1989-11-17',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Bernardo y Bianca al rescate',
                'description' => 'Bernardo y Bianca, dos valientes ratones miembros de la Sociedad Protectora de Animales, deben rescatar a una niña secuestrada por una malvada mujer. Con ingenio y valentía, se embarcan en una peligrosa misión para salvarla.',
                'release_date' => '1977-06-22',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hércules',
                'description' => 'Hércules, hijo de Zeus, es condenado a vivir como un mortal en la Tierra. Tras descubrir su verdadera identidad, lucha por recuperar su lugar entre los dioses del Olimpo. Con la ayuda de sus amigos, enfrenta desafíos y villanos en su camino hacia la redención.',
                'release_date' => '1997-06-27',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Aladdín',
                'description' => 'Aladdín, un joven ladrón, descubre una lámpara mágica que le concede tres deseos. Con la ayuda de un genio y su amiga Jasmine, lucha por detener los malvados planes del hechicero Jafar y demostrar que es digno de ser príncipe.',
                'release_date' => '1992-11-25',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La bella y la bestia',
                'description' => 'Bella, una joven brillante y curiosa, se enamora de un príncipe maldito que vive como una bestia. A través de su amor y valentía, Bella rompe la maldición, demostrando que la belleza está en el corazón.',
                'release_date' => '1991-11-22',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Aristogatos',
                'description' => 'Una elegante familia de gatos vive en París, pero cuando su dueña es secuestrada, los gatos deben aprender a sobrevivir en las calles. Junto con un simpático gato callejero, viven divertidas y tiernas aventuras.',
                'release_date' => '1970-12-24',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Las nuevas aventuras de Winnie Pooh',
                'description' => 'Winnie Pooh y sus amigos del Bosque de los Cien Acres viven nuevas y emocionantes aventuras, donde se enfrentan a desafíos con la ayuda de su amistad y generosidad. Un relato encantador para toda la familia.',
                'release_date' => '2002-02-12',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El Jorobado de Notre Dame',
                'description' => 'Quasimodo, el jorobado campanero de Notre Dame, se embarca en una aventura para proteger a la gitana Esmeralda. A pesar de los prejuicios y su aislamiento, lucha por la justicia y por encontrar su lugar en el mundo.',
                'release_date' => '1996-06-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Oliver y su pandilla',
                'description' => 'Oliver, un gatito huérfano, se une a una pandilla de perros callejeros en Nueva York. Juntos enfrentan las amenazas de un villano y aprenden el verdadero valor de la amistad y la lealtad.',
                'release_date' => '1988-11-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Robin Hood',
                'description' => 'Robin Hood, un astuto y valiente forajido, lucha por los pobres robando a los ricos para dar a los necesitados. Junto con su leal compañero, el animalito Little John, desafía al malvado príncipe Juan y restaura la justicia en el reino.',
                'release_date' => '1973-11-08',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Las locuras del emperador',
                'description' => 'El emperador Kuzco, un joven y egoísta monarca, es transformado en llama por su malvada consejera. Ahora, con la ayuda de un campesino llamado Pacha, trata de recuperar su trono y su humanidad en una serie de cómicas y divertidas peripecias.',
                'release_date' => '2000-12-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Mulan',
                'description' => 'Mulan, una joven china, se disfraza de hombre para unirse al ejército y defender a su país. Con valentía y astucia, demuestra que la verdadera fuerza viene del corazón y lucha por su familia y su honor.',
                'release_date' => '1998-06-19',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Lilo & Stitch',
                'description' => 'Lilo, una niña hawaiana, adopta a un extraño experimento alienígena llamado Stitch. Juntos, mientras enfrentan desafíos cósmicos, aprenden sobre la familia, la amistad y lo que significa ser diferente.',
                'release_date' => '2002-06-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Tierra de osos',
                'description' => 'Un joven llamado Kenai, transformado en oso, debe aprender a ver el mundo desde una nueva perspectiva. A lo largo de su viaje, forma una amistad con un oso llamado Koda y descubre el valor del amor fraternal y la conexión con la naturaleza.',
                'release_date' => '2003-10-29',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Chicken Little',
                'description' => 'Chicken Little, una pequeña gallina, vive en un pueblo donde se siente incomprendida. Tras un suceso cómico donde cree que el cielo se cae, se embarca en una aventura para salvar a su mundo, demostrando que incluso los más pequeños pueden hacer grandes cosas.',
                'release_date' => '2005-11-04',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Los Tres Mosqueteros',
                'description' => 'Los tres mosqueteros, Mickey, Donald y Goofy, se embarcan en una aventura llena de acción para proteger a la reina y detener los planes malvados del cardenal Richelieu. Con valentía y trabajo en equipo, luchan por la justicia en el reino.',
                'release_date' => '2004-08-03',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fantasía 2000',
                'description' => 'Fantasía 2000 es una colección de animaciones acompañadas de música clásica, presentada con una innovadora mezcla de tecnología digital. Cada segmento cuenta una historia visual única, desde la magia de "El aprendiz de brujo" hasta las maravillas del universo.',
                'release_date' => '2000-01-01',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Bolt: Un perro fuera de serie',
                'description' => 'Bolt, un perro estrella de un programa de televisión, cree que tiene superpoderes. Cuando se escapa y llega al mundo real, deberá aprender que la verdadera valentía viene del corazón y que la amistad es más poderosa que cualquier poder.',
                'release_date' => '2008-11-21',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Vacas vaqueras',
                'description' => 'Un grupo de vacas se enfrenta a una amenaza de un malvado empresario que quiere despojarlas de su rancho. Juntas, idean un plan para salvar su hogar y aprender que no hay desafío demasiado grande cuando trabajan en equipo.',
                'release_date' => '2004-06-04',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Tarzan',
                'description' => 'Tarzan, un niño criado por gorilas en la selva africana, descubre su verdadero origen humano cuando conoce a Jane. A medida que se enfrenta a su destino, Tarzan lucha por proteger su hogar y encontrar su lugar en el mundo.',
                'release_date' => '1999-06-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El planeta del tesoro',
                'description' => 'Jim Hawkins, un joven aventurero, se embarca en un viaje a un planeta lejano en busca de un tesoro escondido. Junto a su tripulación espacial, enfrenta desafíos peligrosos y descubre la importancia de la amistad y el coraje.',
                'release_date' => '2002-11-27',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Vida Salvaje',
                'description' => 'Un grupo de animales de un zoológico de Nueva York se ve forzado a adaptarse a la vida en la naturaleza cuando accidentalmente son enviados a África. A través de la diversión y el caos, aprenden sobre la verdadera amistad y el valor de la libertad.',
                'release_date' => '2006-03-31',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Atlantis',
                'description' => 'Milo Thatch, un joven aventurero, se une a una expedición para descubrir la mítica ciudad perdida de Atlantis. Mientras explora el misterio de la antigua civilización, enfrenta traiciones y desafíos, y lucha por salvar la ciudad de su destrucción.',
                'release_date' => '2001-06-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La familia del futuro',
                'description' => 'Lewis, un joven inventor, viaja al futuro donde conoce a la excéntrica familia de su amigo Wilbur Robinson. Juntos deben luchar para cambiar el destino y salvar el futuro, mientras se enfrentan a situaciones cómicas y desafíos inesperados.',
                'release_date' => '2007-03-30',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La princesa y el sapo',
                'description' => 'Tiana, una joven trabajadora, se ve envuelta en un mundo de magia cuando besa a un sapo que resulta ser un príncipe encantado. Juntos deben encontrar una forma de romper el hechizo y vivir felices, mientras aprenden sobre el amor y los sueños.',
                'release_date' => '2009-12-11',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Frozen',
                'description' => 'Cuando su reino se ve sumido en un invierno eterno, la princesa Anna se embarca en una peligrosa aventura junto a un grupo de valientes amigos para encontrar a su hermana Elsa, cuyo poder está causando el desastre. En el camino, descubre que el amor verdadero puede romper cualquier hechizo.',
                'release_date' => '2013-11-27',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Aviones',
                'description' => 'Dusty Crophopper, un avión agrícola que sueña con convertirse en un piloto de carreras, debe superar sus miedos y sus limitaciones para competir en el campeonato de vuelos más importante del mundo. A lo largo de su aventura, aprenderá sobre la verdadera amistad y el trabajo en equipo.',
                'release_date' => '2013-08-09',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Enredados',
                'description' => 'Rapunzel, una joven con un largo cabello mágico, escapa de su torre y se embarca en una aventura épica con el ladrón Flynn Rider. Juntos enfrentan peligros y descubren la verdad sobre su pasado, mientras la joven lucha por recuperar su libertad y su identidad.',
                'release_date' => '2010-11-24',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ratatouille',
                'description' => 'Remy, una rata con un talento increíble para la cocina, sueña con convertirse en chef en París. A pesar de los obstáculos, logra asociarse con un joven cocinero para crear los platos más deliciosos, demostrando que la pasión y la perseverancia pueden superar cualquier barrera.',
                'release_date' => '2007-06-29',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'WALL•E',
                'description' => 'WALL•E es el último robot en la Tierra, encargado de limpiar el planeta abandonado. Mientras realiza su tarea, descubre el amor y se embarca en una misión para salvar a la humanidad. Una historia que toca temas de amor, esperanza y el futuro del planeta.',
                'release_date' => '2008-06-27',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
