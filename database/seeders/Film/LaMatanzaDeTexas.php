<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class LaMatanzaDeTexas extends Seeder
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
                'title' => 'La matanza de Texas',
                'description' => 'Un grupo de jóvenes se adentran en una zona rural de Texas y son atacados por una familia de psicópatas, incluido el infame Leatherface.',
                'release_date' => '1974-10-11',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas 2',
                'description' => 'Los sobrevivientes del primer ataque se enfrentan nuevamente a la familia de asesinos. Esta secuela mezcla el horror con el humor negro.',
                'release_date' => '1986-05-23',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas 3',
                'description' => 'Unos jóvenes se ven atrapados por la familia de Leatherface en una zona desolada y deben luchar por sus vidas.',
                'release_date' => '1990-01-12',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas+3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas 4: La nueva generación',
                'description' => 'Un grupo de adolescentes cae en las garras de la familia de Leatherface, que sigue matando en busca de nuevos miembros para su familia.',
                'release_date' => '1995-09-22',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas-+La+nueva+generacio%CC%81n.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas 5: Una verdad aterradora',
                'description' => 'En esta película, un grupo de personas busca descubrir la verdad sobre los horrores perpetrados por Leatherface y su familia.',
                'release_date' => '2006-02-14',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas-+Una+verdad+aterradora.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas 6: El origen',
                'description' => 'La película narra los orígenes de Leatherface y su familia, mostrando cómo se convirtieron en los monstruos que aterrorizan a sus víctimas.',
                'release_date' => '2006-10-06',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas-+El+origen.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas: Herencia maldita',
                'description' => 'Un joven debe enfrentarse al legado de su familia y a los horrores del pasado que los persiguen.',
                'release_date' => '2017-10-20',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas+3D.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La matanza de Texas',
                'description' => 'En esta película, un nuevo grupo de jóvenes se enfrenta a la familia de Leatherface en una serie de terroríficas circunstancias.',
                'release_date' => '2022-02-18',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/La+matanza+de+Texas+2022.webp'
            ]
        ];

        Film::insert($films);
    }
}
