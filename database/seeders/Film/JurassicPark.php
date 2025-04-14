<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class JurassicPark extends Seeder
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
                'title' => 'Jurassic Park',
                'description' => 'Jurassic Park es un parque temático de alta tecnología donde los dinosaurios cobran vida gracias a la ingeniería genética. Después de una serie de eventos inesperados, los visitantes del parque se ven atrapados en una isla deshabitada donde los dinosaurios, creados para entretenimiento, se convierten en una amenaza mortal. La película sigue a un grupo de personas mientras luchan por sobrevivir ante los peligros de este mundo prehistórico.',
                'release_date' => '1993-06-11',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'The Lost World: Jurassic Park',
                'description' => 'En la secuela de Jurassic Park, el multimillonario John Hammond revela la existencia de una isla oculta, donde los dinosaurios viven libres sin intervención humana. Un equipo de científicos y exploradores es enviado a la isla para estudiar a los dinosaurios, pero pronto descubren que la situación se vuelve peligrosa cuando una expedición se convierte en un enfrentamiento mortal entre los humanos y los dinosaurios. La supervivencia de todos depende de su capacidad para escapar antes de que sea demasiado tarde.',
                'release_date' => '1997-05-23',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Jurassic+Park+II+(1997).mp4',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Jurassic Park III',
                'description' => 'En Jurassic Park III, un grupo de personas planea una misión de rescate en la isla donde habitan los dinosaurios. Un niño ha desaparecido en el parque y se teme que esté siendo retenido por los dinosaurios. Sin embargo, cuando el equipo de rescate llega a la isla, se encuentran con criaturas aún más peligrosas de lo que imaginaban. A medida que luchan por su supervivencia, deben enfrentarse a los dinosaurios y a los peligros imprevistos que acechan en la isla.',
                'release_date' => '2001-07-18',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Jurassic+Park+III+(2001).mp4',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Jurassic World',
                'description' => 'Jurassic World presenta un nuevo parque temático sobre dinosaurios, con atracciones y especies creadas genéticamente. Sin embargo, los problemas comienzan cuando un nuevo dinosaurio híbrido, el Indominus rex, escapa de su recinto y pone en peligro la vida de los visitantes. Mientras el caos se desata, los empleados del parque deben encontrar una manera de detener al animal y evitar que se produzca una catástrofe aún mayor. Esta película reinicia la saga de Jurassic Park con una perspectiva moderna y llena de acción.',
                'release_date' => '2015-06-12',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Jurassic World: Fallen Kingdom',
                'description' => 'En Jurassic World: Fallen Kingdom, los dinosaurios en la isla de Isla Nublar están en peligro debido a una erupción volcánica inminente. Un grupo de activistas, liderados por Owen Grady y Claire Dearing, regresan a la isla para salvar a los dinosaurios antes de que sea demasiado tarde. Pero lo que parecía ser una misión humanitaria se convierte rápidamente en una lucha por la supervivencia, cuando descubren que hay una conspiración que amenaza no solo a los dinosaurios, sino también a la humanidad misma.',
                'release_date' => '2018-06-22',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Jurassic World: Dominion',
                'description' => 'Jurassic World: Dominion lleva la saga a un nuevo nivel, mostrando un mundo en el que los dinosaurios conviven con los humanos. Esta situación crea tensiones y peligros en el planeta. Cuando una nueva amenaza global emerge, un grupo de personajes debe trabajar juntos para evitar una catástrofe que podría alterar el equilibrio de la naturaleza y poner en peligro a toda la humanidad. La película explora el impacto que tiene la presencia de los dinosaurios en el mundo moderno, mientras enfrentan nuevas amenazas.',
                'release_date' => '2022-06-10',
                'url' => '',
                'cover_url' => ''
            ],
        ];

        Film::insert($films);
    }
}