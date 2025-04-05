<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ToyStory extends Seeder
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
                'title' => 'Toy Story',
                'description' => 'En un mundo donde los juguetes cobran vida, Woody, un vaquero de peluche, es el favorito de Andy. Sin embargo, todo cambia cuando un nuevo juguete, Buzz Lightyear, llega a la casa y desafía la posición de Woody como el juguete más querido. Con una serie de malentendidos y peleas, ambos deberán trabajar juntos para encontrar el camino de regreso a casa antes de que sea demasiado tarde.',
                'release_date' => '1995-11-22',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Toy+Story.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Toy Story 2',
                'description' => 'Woody es secuestrado por un coleccionista que quiere venderlo a un museo en Japón. Buzz Lightyear y los demás juguetes de Andy se embarcan en una misión para rescatarlo. En el camino, Woody descubre secretos sobre su origen y conoce a nuevos personajes, incluyendo a Jessie, una vaquera que se convierte en parte de su familia de juguetes. A medida que enfrentan nuevos retos, la amistad y lealtad prevalecen.',
                'release_date' => '1999-11-24',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Toy+Story+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Toy Story 3',
                'description' => 'Andy está por ir a la universidad y ya no juega con sus juguetes. En un intento por asegurarse de que sus juguetes tengan un futuro, Woody, Buzz y los demás terminan en una guardería. A medida que tratan de adaptarse a su nueva vida, pronto descubren que la guardería no es tan amigable como parece. Los juguetes deberán trabajar juntos para escapar y encontrar una nueva misión que les dé esperanza para el futuro.',
                'release_date' => '2010-06-18',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Toy+Story+3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Toy Story 4',
                'description' => 'Cuando Woody y los demás juguetes emprenden un viaje con Bonnie, Woody se encuentra con un juguete olvidado llamado Forky. Mientras enfrentan nuevos desafíos, Woody se encuentra con su antigua amiga Bo Peep, quien ha vivido aventuras propias. A medida que el grupo aprende nuevas lecciones sobre la amistad, la identidad y el valor de ser querido, Woody debe tomar una difícil decisión sobre su futuro y su papel en la vida de Bonnie.',
                'release_date' => '2019-06-21',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Toy+Story+4.webp'
            ],
        ];

        Film::insert($films);
    }
}
