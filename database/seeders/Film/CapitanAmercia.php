<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class CapitanAmercia extends Seeder
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
                'title' => 'Capitán América: El primer vengador',
                'description' => 'Un joven y débil Steve Rogers se ofrece como voluntario para un experimento secreto del gobierno durante la Segunda Guerra Mundial. Tras recibir un suero experimental, se transforma en el superhéroe conocido como el Capitán América. Junto a sus aliados, debe enfrentarse a los nazis y a su enemigo, el Cráneo Rojo, quien busca controlar el mundo con armas de destrucción masiva.',
                'release_date' => '2011-07-22',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Capitán América: Soldado de Invierno',
                'description' => 'El Capitán América, ahora en la era moderna, se enfrenta a una amenaza en forma de un misterioso y mortal enemigo conocido como el Soldado de Invierno. Junto a la Viuda Negra, debe desentrañar una conspiración dentro de S.H.I.E.L.D. que pone en peligro la seguridad mundial. A lo largo de la película, Steve Rogers se enfrenta a la verdad sobre su pasado y la amenaza que el Soldado de Invierno representa para su futuro.',
                'release_date' => '2014-04-04',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Capitán América: Civil War',
                'description' => 'Las tensiones políticas y las diferencias ideológicas dividen a los Vengadores. La aprobación de una ley que regula a los superhéroes provoca un enfrentamiento entre los aliados, liderados por Capitán América, y los que apoyan el control gubernamental, encabezados por Iron Man. La guerra civil entre los héroes más poderosos de la Tierra pone en peligro la unidad del equipo y la seguridad global.',
                'release_date' => '2016-04-12',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Capitán América: Brave New World',
                'description' => 'En un mundo cambiante, Sam Wilson, el nuevo Capitán América, debe enfrentarse a amenazas globales y redefinir lo que significa ser un héroe. Con nuevos desafíos por delante y la responsabilidad de portar el escudo, Sam se encuentra en una encrucijada mientras lucha por ser un líder digno del legado de Steve Rogers.',
                'release_date' => '2024-07-26',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
