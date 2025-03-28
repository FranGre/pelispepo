<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ElZorro extends Seeder
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
                'title' => 'La máscara del Zorro',
                'description' => 'Don Diego de la Vega, también conocido como el Zorro, regresa después de años de exilio para vengar la muerte de su hermano y defender a los oprimidos. Con la ayuda de un joven bandido, Alejandro Murrieta, se enfrenta a las fuerzas del corrupto gobernante español en California.',
                'release_date' => '1998-07-17',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La leyenda del Zorro',
                'description' => 'Diego de la Vega, el Zorro, debe enfrentar una nueva amenaza mientras su vida personal se ve amenazada por la posibilidad de perder a su esposa, Elena. A la par, la conspiración de un villano pone en riesgo la libertad de California, por lo que el Zorro deberá regresar a la acción para salvar a su tierra.',
                'release_date' => '2005-10-28',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
