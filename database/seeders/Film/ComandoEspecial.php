<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ComandoEspecial extends Seeder
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
                'title' => 'Infiltrados en clase',
                'description' => 'Los policías Schmidt y Jenko, ahora en la academia de policía, se infiltran en un instituto para desmantelar una red de drogas. A medida que pasan tiempo entre los jóvenes, deben adaptarse a un mundo completamente diferente al de la ley y el orden. A medida que las situaciones se complican, la relación entre los dos amigos se pone a prueba, pero su vínculo y habilidades los ayudarán a completar la misión.',
                'release_date' => '2012-03-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Comando+Especial+1.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Infiltrados en la universidad',
                'description' => 'Schmidt y Jenko, tras su exitosa misión en la escuela secundaria, ahora se infiltran en una universidad para desmantelar una nueva red de drogas. Mientras más se sumergen en el mundo universitario, los dos amigos comienzan a cuestionar sus lealtades y sus carreras. Las situaciones hilarantes y las aventuras más peligrosas los llevarán a enfrentarse a desafíos aún más grandes.',
                'release_date' => '2014-06-13',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Infiltrados+en+la+universidad.webp'
            ]
        ];

        Film::insert($films);
    }
}
