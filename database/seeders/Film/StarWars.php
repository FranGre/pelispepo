<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class StarWars extends Seeder
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
                'title' => 'Star Wars: Episodio I - La amenaza fantasma',
                'description' => 'En la primera entrega de la trilogía precuela, dos caballeros Jedi, Qui-Gon Jinn y su aprendiz Obi-Wan Kenobi, intentan resolver una disputa comercial que los lleva a un planeta ocupado por la Federación de Comercio. Mientras tanto, descubren a un niño con habilidades excepcionales. La película introduce a Darth Maul y marca el comienzo de la caída de la República Galáctica.',
                'release_date' => '1999-05-19',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars.+Episodio+I-+La+amenaza+fantasma.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: Episodio II - El ataque de los clones',
                'description' => 'En la segunda entrega, la República está al borde de la guerra, y el joven Anakin Skywalker se convierte en el aprendiz de Obi-Wan Kenobi. Mientras Anakin y Padmé Amidala se ven envueltos en una peligrosa conspiración, la galaxia se enfrenta a la creación de un ejército clon que servirá como herramienta para la guerra. Esta película profundiza en la caída de la República y la ascensión de Darth Vader.',
                'release_date' => '2002-05-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars.+Episodio+II-+El+ataque+de+los+clones.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: Episodio III - La venganza de los sith',
                'description' => 'La República Galáctica está en guerra, y Anakin Skywalker se encuentra dividido entre su lealtad a los Jedi y su creciente temor de perder a Padmé. El canciller Palpatine manipula a Anakin para que se convierta en su aprendiz, llevando a la traición que marca el nacimiento del Imperio Galáctico. La película narra el trágico giro de Anakin hacia el lado oscuro y su transformación en Darth Vader.',
                'release_date' => '2005-05-19',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars.+Episodio+III-+La+venganza+de+los+sith.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: Episodio IV - Una nueva esperanza',
                'description' => 'La primera película de la saga original sigue a Luke Skywalker, un joven granjero que se ve arrastrado a la lucha contra el Imperio Galáctico después de encontrar un mensaje de la Princesa Leia. Junto a Han Solo, Chewbacca, y Obi-Wan Kenobi, Luke se embarca en una misión para destruir la Estrella de la Muerte, una estación espacial capaz de destruir planetas. La película establece el conflicto entre la rebelión y el Imperio.',
                'release_date' => '1977-05-25',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars-+Episodio+IV+-+Una+nueva+esperanza.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: Episodio V - El imperio contraataca',
                'description' => 'Tras la victoria en la batalla de Yavin, la Rebelión se ve obligada a huir. Mientras Luke Skywalker busca entrenamiento con el Maestro Jedi Yoda, el Imperio, bajo el mando de Darth Vader, persigue a la Rebelión. Han Solo, Leia y Chewbacca son capturados, y Luke enfrenta su destino al descubrir la verdad sobre su padre. Esta película es conocida por su giro dramático y su tono más oscuro.',
                'release_date' => '1980-05-21',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars-+Episodio+V+-+El+imperio+contraataca.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: Episodio VI - El retorno del Jedi',
                'description' => 'La lucha final contra el Imperio Galáctico culmina en la batalla por la luna de Endor. Luke Skywalker, ahora un Jedi entrenado, enfrenta a su padre, Darth Vader, en un duelo de destino. Mientras tanto, la Rebelión lanza un ataque final contra el Imperio. Esta película cierra la trilogía original con la redención de Anakin Skywalker, la caída del Imperio, y el regreso de la paz a la galaxia.',
                'release_date' => '1983-05-25',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars-+Episodio+VI+-+El+retorno+del+Jedi.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: El despertar de la Fuerza',
                'description' => 'Décadas después de la caída del Imperio, una nueva amenaza emerge en la forma de la Primera Orden, liderada por el siniestro Kylo Ren. Rey, una joven proveniente de un planeta desértico, descubre su conexión con la Fuerza y se ve arrastrada a la lucha contra la Primera Orden. Mientras tanto, la Resistencia se prepara para enfrentarse a esta nueva amenaza. La película inicia una nueva era para la galaxia.',
                'release_date' => '2015-12-18',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars-+El+despertar+de+la+Fuerza.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Rogue One: Una historia de Star Wars',
                'description' => 'En este spin-off, un grupo de rebeldes, liderado por Jyn Erso, se embarca en una misión suicida para robar los planos de la Estrella de la Muerte. La película narra los eventos que ocurren justo antes de los sucesos de *Una nueva esperanza*, mostrando la valentía de aquellos que lucharon por la libertad antes de que los héroes de la saga principal intervinieran. Un relato de sacrificio y resistencia.',
                'release_date' => '2016-12-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Rogue+One-+Una+historia+de+Star+Wars.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: Los últimos Jedi',
                'description' => 'La Resistencia está al borde de la derrota, mientras que Rey busca a Luke Skywalker para que la entrene y la convierta en una Jedi. Sin embargo, Luke se enfrenta a su propio pasado y decide alejarse de la lucha. Rey debe enfrentarse a Kylo Ren y el mal que amenaza con destruir la galaxia. La película profundiza en la lucha interna de los personajes y los desafíos de la esperanza.',
                'release_date' => '2017-12-15',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars-+Los+u%CC%81ltimos+Jedi.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Han Solo: Una historia de Star Wars',
                'description' => 'Esta película cuenta la juventud de Han Solo, desde sus días como un joven ladrón hasta su encuentro con Chewbacca y su participación en el contrabando y la lucha contra el Imperio. La película explora su formación como el icónico personaje que conocemos, y cómo se forjan sus relaciones con personajes clave como Lando Calrissian.',
                'release_date' => '2018-05-25',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Han+Solo-+Una+historia+de+Star+Wars.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Star Wars: El ascenso de Skywalker',
                'description' => 'La Resistencia debe enfrentarse a la última batalla contra la Primera Orden, mientras Rey y sus aliados luchan por restaurar la paz en la galaxia. Rey debe confrontar su linaje y su conexión con la Fuerza, mientras Kylo Ren persigue su propio destino. La película cierra la saga Skywalker con sacrificios, revelaciones y la batalla final entre el bien y el mal.',
                'release_date' => '2019-12-20',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Star+Wars-+El+ascenso+de+Skywalker.webp'
            ]
        ];

        Film::insert($films);
    }
}