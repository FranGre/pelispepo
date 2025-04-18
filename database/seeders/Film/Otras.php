<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Otras extends Seeder
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
                'title' => 'Mentes poderosas',
                'description' => 'En un futuro cercano, un grupo de adolescentes desarrolla poderes psíquicos que los hacen un peligro para el gobierno. La película explora temas de control, opresión y supervivencia.',
                'release_date' => '2018-08-03',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Mentes_poderosas_2018.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Mentes+poderosas.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => '127 horas',
                'description' => 'Basada en hechos reales, esta película narra la historia de un montañero que queda atrapado por una roca en un cañón y debe tomar decisiones extremas para sobrevivir.',
                'release_date' => '2010-11-05',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/127+Horas+(2010).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/127+horas.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => '8 Millas',
                'description' => 'La historia de un joven rapero que lucha por encontrar su lugar en la vida mientras enfrenta sus propios miedos, desafíos y la pobreza que lo rodea.',
                'release_date' => '2002-11-08',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/8_millas.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/8+millas.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Chernóbil: la película',
                'description' => 'Basada en los hechos reales del desastre de Chernóbil, esta película dramatiza los eventos que llevaron al accidente nuclear y las consecuencias devastadoras para el mundo.',
                'release_date' => '2019-03-08',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Chernobyl.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Cherno%CC%81bil-+la+peli%CC%81cula.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Fukushima 50',
                'description' => 'Un relato de los valientes trabajadores que lucharon para evitar un desastre aún mayor tras el colapso de la planta nuclear de Fukushima después del terremoto y tsunami de 2011.',
                'release_date' => '2020-06-26',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Fukushima_50.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Fukushima+50.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El canto del cisne',
                'description' => 'Un drama familiar sobre la vida de una joven bailarina de ballet que lucha por superar las barreras físicas y emocionales mientras persigue su sueño de convertirse en una estrella.',
                'release_date' => '2020-11-13',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Swan_Song_El_Canto_del_Cisne.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/El+canto+del+cisne.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Ejército de los muertos',
                'description' => 'En un mundo devastado por una pandemia de zombies, un grupo de mercenarios emprende un peligroso asalto a un casino de Las Vegas para recuperar una fortuna, mientras enfrentan hordas de muertos vivientes.',
                'release_date' => '2021-05-21',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/army_of_the_dead_(ejercito_de_los_muertos).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Eje%CC%81rcito+de+los+muertos.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Acero puro',
                'description' => 'Un ex boxeador se asocia con su hijo para entrenar un robot de combate en una futurista liga de peleas. Juntos deben luchar por un lugar en un mundo dominado por la tecnología.',
                'release_date' => '2011-10-07',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/gigantes+de+acero+(2011).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Acero+puro.webp'
            ]
        ];

        Film::insert($films);
    }
}