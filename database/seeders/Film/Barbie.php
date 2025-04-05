<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Barbie extends Seeder
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
                'title' => 'Barbie en el Cascanueces',
                'description' => 'Barbie interpreta a Clara, una niña que, con la ayuda de su hada madrina, es transportada al mágico mundo del Cascanueces. Junto a un valiente soldado de madera, Clara debe enfrentarse al malvado Rey Ratón para salvar a su mundo y restaurar la paz, en esta adaptación de la famosa historia clásica de Navidad.',
                'release_date' => '2001-10-01',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Barbie+en+cascanueces.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Barbie: Moda mágica en París',
                'description' => 'Barbie viaja a París para cumplir su sueño de trabajar como diseñadora de moda. Junto con sus nuevas amigas, vive una aventura llena de magia y creatividad, mientras prepara su gran desfile de moda. Pero no todo es fácil, ya que Barbie tendrá que superar desafíos y aprender valiosas lecciones sobre amistad, perseverancia y el trabajo en equipo.',
                'release_date' => '2010-01-01',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Barbie-+moda+ma%CC%81gica+en+Pari%CC%81s.webp'
            ]
        ];

        Film::insert($films);
    }
}
