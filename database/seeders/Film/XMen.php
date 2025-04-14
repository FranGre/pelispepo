<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class XMen extends Seeder
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
                'title' => 'X-Men',
                'description' => 'Un grupo de mutantes con habilidades extraordinarias luchan por un futuro en el que puedan convivir con los humanos. Mientras tanto, un hombre con habilidades similares, Magneto, busca destruir la humanidad para que los mutantes tomen el control.',
                'release_date' => '2000-07-14',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men 2',
                'description' => 'Los mutantes deben unirse para enfrentar a un peligro mayor cuando un general estadounidense, William Stryker, planea exterminar a todos los mutantes. Mientras tanto, Wolverine descubre su pasado y su conexión con el proyecto que lo convirtió en lo que es.',
                'release_date' => '2003-05-02',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_2.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men: La decisión final',
                'description' => 'El gobierno de los EE. UU. lanza una cura para los mutantes, lo que divide a los X-Men y a Magneto en sus respectivos bandos. Mientras tanto, un mutante con el poder de alterar la mente pone en peligro a los X-Men y a la humanidad.',
                'release_date' => '2006-05-26',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_3_La_batalla_final.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_3_La_batalla_final.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men: Primera generación',
                'description' => 'En la década de 1960, Charles Xavier y Erik Lensherr luchan por sus ideales: Xavier quiere la coexistencia pacífica entre humanos y mutantes, mientras que Lensherr busca la supremacía mutante. Su amistad se ve amenazada por un poderoso enemigo común.',
                'release_date' => '2011-06-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_primera_generación.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_primera_generaci%C3%B3n.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men: Días del futuro pasado',
                'description' => 'Los X-Men del futuro deben enviar a Wolverine al pasado para evitar un evento que cambiará el curso de la historia y pondrá en peligro la existencia de los mutantes. En el pasado, los jóvenes Charles Xavier y Magneto deberán unir fuerzas para detener el desastre.',
                'release_date' => '2014-05-23',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_Dias_del_futuro_pasado.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_D%C3%ADas_del_futuro_pasado.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men: Apocalipsis',
                'description' => 'El regreso de Apocalipsis, el primer y más poderoso mutante de la historia, amenaza con destruir la humanidad. Los X-Men deben unirse con la ayuda de los jóvenes mutantes para enfrentar a este nuevo enemigo.',
                'release_date' => '2016-05-27',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_Apocalipsis.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_Apocalipsis.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men Orígenes: Lobezno',
                'description' => 'La película narra el origen de Wolverine, desde su infancia hasta convertirse en el mutante que conocemos. A medida que descubre su pasado, Wolverine se enfrenta a los enemigos que lo han convertido en la bestia que es hoy.',
                'release_date' => '2009-05-01',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_Origenes_Wolverine.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_Or%C3%ADgenes_Wolverine.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Lobezno inmortal',
                'description' => 'Tras los eventos de "X-Men: La decisión final", Wolverine viaja a Japón donde se enfrenta a un enemigo mortal que le ofrece la posibilidad de convertirse en mortal. La lucha por su vida y su humanidad comienza.',
                'release_date' => '2013-07-26',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_The_Wolverine.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Lobezno+inmortal.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Logan',
                'description' => 'En un futuro cercano, Wolverine es un hombre cansado y envejecido que se cuida de un debilitado Charles Xavier. Su vida cambia cuando una joven mutante, Laura, aparece, llevando a Wolverine a una última misión.',
                'release_date' => '2017-03-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_Logan.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Logan.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'X-Men: Fénix Oscura',
                'description' => 'Jean Grey, una de los X-Men, experimenta una explosión de poder cuando una misión en el espacio sale mal. El poder que recibe la corrompe, y los X-Men deben luchar contra la amenaza de su propia amiga.',
                'release_date' => '2019-06-07',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/X-Men_Dark_Phoenix.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/X-Men_Dark_Phoenix.webp'
            ]
        ];


        Film::insert($films);
    }
}
