<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Ted extends Seeder
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
                'title' => 'Ted',
                'description' => 'John Bennett, un hombre adulto, sigue siendo amigo inseparable de su oso de peluche, Ted, que cobra vida gracias a un deseo hecho cuando era niño. Aunque la amistad entre ellos es inquebrantable, la relación de John con su novia, Lori, se ve afectada por la conducta inmadura de Ted. Juntos enfrentan situaciones cómicas y caóticas, mientras Ted trata de encontrar su lugar en el mundo.',
                'release_date' => '2012-06-29',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ted 2',
                'description' => 'Ted se enfrenta a un nuevo reto cuando decide luchar por sus derechos legales para ser reconocido como una persona. Tras casarse con Tami-Lynn, Ted y su amigo John inician una batalla en la corte para que Ted pueda adoptar un niño. La película continúa con su humor irreverente, mientras Ted y John navegan por las complejidades de la vida adulta y enfrentan problemas legales y personales.',
                'release_date' => '2015-06-26',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}