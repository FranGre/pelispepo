<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Batman extends Seeder
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
                'title' => 'Batman Begins',
                'description' => 'Tras presenciar el asesinato de sus padres, Bruce Wayne recorre el mundo en busca de respuestas sobre el crimen y la justicia. Entrenado por la Liga de las Sombras, rechaza su ideología y regresa a Gotham, donde adopta la identidad de Batman para luchar contra la corrupción. Con la ayuda de Alfred y Lucius Fox, enfrenta a Carmine Falcone, al Espantapájaros y a Ra’s al Ghul, quien planea destruir la ciudad.',
                'release_date' => '2005-06-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Batman: El Caballero Oscuro',
                'description' => 'Batman, el fiscal Harvey Dent y el teniente Gordon trabajan para erradicar el crimen en Gotham. Sin embargo, un nuevo enemigo surge: el Joker, un anarquista despiadado que desata el caos con su retorcida filosofía. Mientras Batman enfrenta dilemas morales, el Joker manipula a Dent hasta convertirlo en Dos Caras. Gotham se sumerge en el caos y Batman debe hacer un sacrificio final.',
                'release_date' => '2008-07-18',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Batman: La Leyenda Renace',
                'description' => 'Ocho años después de asumir la culpa por los crímenes de Harvey Dent, Bruce Wayne vive recluido mientras Gotham disfruta de una paz frágil. Sin embargo, la llegada de Bane, un mercenario brutal, pone en jaque la ciudad. Batman regresa, pero es derrotado y encarcelado. Mientras Bane impone su reinado de terror, Bruce debe recuperarse y resurgir para salvar Gotham.',
                'release_date' => '2012-07-20',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'The Batman',
                'description' => 'Un joven y oscuro Bruce Wayne, aún en sus primeros días como el Caballero Oscuro, investiga una serie de asesinatos cometidos por un villano conocido como el Riddler. Mientras se enfrenta a la corrupción que aún persiste en Gotham, Batman descubre secretos oscuros de su familia y de la ciudad que podrían cambiarlo todo.',
                'release_date' => '2022-03-04',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}
