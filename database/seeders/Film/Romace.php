<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Romace extends Seeder
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
                'title' => '500 días juntos',
                'description' => 'La historia de una relación contada desde la perspectiva de Tom Hansen, quien repasa sus recuerdos con Summer Finn.',
                'release_date' => '2009-07-17',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/500+di%CC%81as+juntos.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Mi vida a los 17',
                'description' => 'Nadine, una adolescente complicada, comienza a encontrar un equilibrio en su vida cuando se enfrenta a las dificultades de la adolescencia y las relaciones con su familia y amigos.',
                'release_date' => '2016-11-18',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Mi+vida+a+los+17+(2016).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Mi+vida+a+los+17.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Crush',
                'description' => 'Una adolescente que experimenta los altibajos de la vida escolar y los sentimientos de enamoramiento cuando se ve involucrada en una relación complicada con un compañero.',
                'release_date' => '2022-04-08',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Crush+(2022).mp4',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Cuando te encuentre',
                'description' => 'Trescientos días de ausencia se interrumpen cuando Logan Thibault, un soldado veterano de Irak, regresa a la casa de una mujer que él cree que está conectada a su supervivencia.',
                'release_date' => '2012-04-20',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Cuando+te+encuentre+(2012).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Cuando+te+encuentre.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'La chica que saltaba a través del tiempo',
                'description' => 'Una joven que descubre que puede viajar en el tiempo y utiliza su habilidad para cambiar eventos en su vida y en la de sus amigos.',
                'release_date' => '2006-07-15',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/La+chica+que+saltaba+a+través+del+tiempo.mp4',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}