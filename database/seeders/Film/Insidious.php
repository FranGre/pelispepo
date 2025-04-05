<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Insidious extends Seeder
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
                'title' => 'Insidious',
                'description' => 'Una familia se enfrenta a fenómenos paranormales después de que su hijo entra en un estado de coma misterioso. La familia descubre que su hogar está siendo acechado por espíritus y fuerzas del más allá. Para salvar al niño, deben enfrentarse a los horrores del mundo espiritual.',
                'release_date' => '2010-04-01',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Insidious.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Insidious: Capítulo 2',
                'description' => 'La familia Lambert sigue luchando contra los espíritus que acechan a su hijo, Dalton. Mientras buscan respuestas sobre el misterioso mundo en el que Dalton se encontraba, descubren secretos oscuros sobre el pasado y lo que realmente ocurrió durante su coma.',
                'release_date' => '2013-09-13',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Insidious-+Capi%CC%81tulo+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Insidious: Capítulo 3',
                'description' => 'Una joven llamada Quinn Brenner intenta contactar con su madre fallecida, pero pronto se da cuenta de que ha abierto una puerta hacia el mundo de los espíritus. A medida que fuerzas oscuras la acechan, busca ayuda de una médium que puede ser su única esperanza.',
                'release_date' => '2015-06-05',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Insidious-+Capi%CC%81tulo+3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Insidious: La última llave',
                'description' => 'La médium Elise Rainier enfrenta su pasado en una nueva misión para salvar a una familia. Regresa a su hogar ancestral, donde descubre oscuros secretos y enfrenta a los espíritus aterradores que la han perseguido desde su niñez.',
                'release_date' => '2018-01-05',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Insidious-+La+u%CC%81ltima+llave.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Insidious: La puerta roja',
                'description' => 'Dalton Lambert, ahora un joven adulto, regresa a la universidad, pero descubre que su conexión con el mundo espiritual no ha desaparecido. Cuando reabre la puerta al más allá, enfrenta los horrores que lo han perseguido durante toda su vida.',
                'release_date' => '2023-07-07',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Insidious-+La+puerta+roja.webp'
            ]
        ];

        Film::insert($films);
    }
}
