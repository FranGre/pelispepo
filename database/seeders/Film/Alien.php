<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Alien extends Seeder
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
                'title' => 'Alien: El octavo pasajero',
                'description' => 'En una misión de regreso a la Tierra, la tripulación de la nave espacial *Nostromo* recibe una señal de socorro de un planeta remoto. Al investigar, descubren una nave alienígena abandonada. Pronto, un miembro de la tripulación es atacado por una criatura extraterrestre que pone en peligro a todos a bordo, desatando una lucha por sobrevivir.',
                'release_date' => '1979-05-25',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Alien_El_8vo_Pasajero_(1979).mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Alien-+El+octavo+pasajero.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien: El regreso',
                'description' => 'Después de sobrevivir al horror de la primera película, la teniente Ellen Ripley regresa al planeta LV-426 junto a un grupo de marines coloniales. Su misión es investigar la pérdida de contacto con una colonia humana. Allí, se enfrentan a una colonia de xenomorfos mucho más peligrosa, lo que desatará una nueva batalla por la supervivencia.',
                'release_date' => '1986-07-18',
                'url' => 'https://f005.backblazeb2.com/file/nochedepelis/pelis/LAT/Aliens_El_Regreso.mp4',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Aliens-+El+regreso.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien 3',
                'description' => 'Después de escapar del planeta donde ocurrió la confrontación en *Alien: El regreso*, Ripley se estrella en una prisión de máxima seguridad. Pero pronto descubre que una nueva criatura alienígena ha comenzado a matar a los prisioneros, obligando a Ripley a enfrentarse a este nuevo horror mientras lucha por salvar su vida y la de los demás.',
                'release_date' => '1992-05-22',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Alien+3.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien: Resurrección',
                'description' => '200 años después de su muerte, Ripley es resucitada por un equipo de científicos. Descubren que su ADN fue fusionado con el de un alienígena. Ahora, en una nave espacial, los extraterrestres son transportados para ser estudiados, pero se desatan cuando comienzan a escapar y atacar a la tripulación. Ripley debe hacer frente a su propio destino y a las criaturas que acechan.',
                'release_date' => '1997-11-26',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Alien-+Resurreccio%CC%81n.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Prometheus',
                'description' => 'Un grupo de científicos y exploradores viajan a un lejano planeta, donde descubren una antigua civilización que podría tener las respuestas sobre el origen de la humanidad. Sin embargo, lo que inicialmente parece ser un descubrimiento fascinante pronto se convierte en una pesadilla mortal, ya que se desatan horrores inesperados.',
                'release_date' => '2012-06-08',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Prometheus.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien: Covenant',
                'description' => 'Un grupo de colonos viaja a un planeta lejano en busca de un nuevo hogar. Sin embargo, descubren un mundo aparentemente perfecto, pero completamente deshabitado. En su exploración, encuentran a un misterioso androide, David, que estuvo involucrado en los eventos de *Prometheus*, y pronto desatan una terrible amenaza extraterrestre.',
                'release_date' => '2017-05-19',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Alien-+Covenant.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Alien: Romulus',
                'description' => 'Alien: Romulus es una película en desarrollo en la saga de Alien, aunque aún no se ha estrenado ni se conocen muchos detalles. Se espera que continúe explorando el universo Alien y presente nuevos horrores alienígenos en un contexto completamente nuevo.',
                'release_date' => '2024-08-16',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Alien-+Romulus.webp'
            ]
        ];


        Film::insert($films);
    }
}
