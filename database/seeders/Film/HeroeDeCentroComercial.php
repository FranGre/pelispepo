<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class HeroeDeCentroComercial extends Seeder
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
                'title' => 'Héroe de centro comercial',
                'description' => 'Un guardia de seguridad en un centro comercial se convierte en un héroe cuando se enfrenta a una amenaza terrorista que pone en peligro a los compradores y empleados. Mientras lucha por salvar a todos, descubre un lado de sí mismo que nunca había conocido.',
                'release_date' => '2009-12-11',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Héroe de centro comercial II',
                'description' => 'El guardia de seguridad regresa para enfrentar nuevas amenazas en el centro comercial, ahora con mayores peligros y desafíos. Junto a su equipo, lucha contra criminales que intentan desmantelar el lugar, mientras lidia con su vida personal y su rol como protector del centro.',
                'release_date' => '2017-12-15',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
