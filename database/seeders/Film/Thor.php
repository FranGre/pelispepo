<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Thor extends Seeder
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
                'title' => 'Thor',
                'description' => 'Thor, el dios del trueno, es expulsado del reino de Asgard y enviado a la Tierra, donde se encuentra con una amenaza cósmica. Después de conocer a los humanos, Thor se da cuenta de que su arrogancia y falta de humildad lo han llevado a perder su poder. Ahora, para detener la destrucción de su mundo, deberá recuperar su martillo Mjolnir y enfrentarse a fuerzas que amenazan a la Tierra.',
                'release_date' => '2011-05-06',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Thor.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Thor: El Mundo Oscuro',
                'description' => 'Thor regresa a la Tierra para luchar contra un enemigo ancestral, el Elfo Oscuro, quien planea sumergir el universo en la oscuridad eterna. Mientras la amenaza se intensifica, Thor se ve obligado a colaborar con su hermano Loki para detenerlo. En medio de la batalla, Thor se enfrenta a la decisión de salvar a su mundo o a su amor perdido, Jane Foster, quien está atrapada en un extraño fenómeno.',
                'release_date' => '2013-11-08',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Thor-+El+mundo+oscuro.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Thor: Ragnarok',
                'description' => 'Thor debe enfrentarse a la destrucción de Asgard, cuando su hermana Hela, la diosa de la muerte, regresa para reclamar el trono. Exiliado en un planeta extraño, Thor se ve obligado a luchar en un torneo gladiador contra su antiguo aliado, Hulk. Juntos, deberán formar una alianza improbable para detener a Hela y evitar que destruya todo lo que Thor conoce y ama, incluyendo el futuro de Asgard.',
                'release_date' => '2017-11-03',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Thor-+Ragnarok.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Thor: Amor y Trueno',
                'description' => 'Thor se enfrenta a un nuevo enemigo, Gorr, el dios carnicero, quien busca destruir todos los dioses del universo. Mientras Thor lucha por proteger a los dioses, se encuentra con viejos amigos, como Jane Foster, quien ahora tiene sus propios poderes como Thor. A medida que enfrentan a Gorr, Thor debe confrontar su propio destino y lo que significa ser un héroe, mientras busca la redención y el amor en tiempos de caos.',
                'release_date' => '2022-07-08',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Thor-+Amor+y+Trueno.webp'
            ]
        ];

        Film::insert($films);
    }
}