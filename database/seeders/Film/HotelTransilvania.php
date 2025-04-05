<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class HotelTransilvania extends Seeder
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
                'title' => 'Hotel Transilvania 1',
                'description' => 'Cuando Dracula abre un hotel exclusivo para monstruos, su hija Mavis se enamora de un humano llamado Jonathan. Esto desencadena una serie de enredos mientras Dracula trata de proteger a su hija y el hotel de que los humanos descubran el refugio.',
                'release_date' => '2012-09-28',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Hotel+Transilvania.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hotel Transilvania 2',
                'description' => 'Dracula está feliz de ver que su nieto Dennis está creciendo, pero teme que no sea un monstruo como su padre. Junto a Mavis, organiza un plan para ayudar a Dennis a descubrir su lado monstruoso, pero los problemas surgen cuando un ser humano llamado Jonathan llega de nuevo al hotel.',
                'release_date' => '2015-09-25',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Hotel+Transilvania+2.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hotel Transilvania 3: Unas vacaciones monstruosas',
                'description' => 'La familia de monstruos se va de vacaciones en un crucero para monstruos. Mientras todos disfrutan, Dracula se enamora de la capitana del barco, Ericka, sin saber que es la bisnieta de su peor enemigo, Van Helsing, quien tiene planes malévolos.',
                'release_date' => '2018-07-13',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Hotel+Transilvania+3-Unas+vacaciones+monstruosas.webp'
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hotel Transilvania: Transformanía',
                'description' => 'Cuando Van Helsing crea una máquina que convierte a los monstruos en humanos, Drácula y sus amigos deben embarcarse en una aventura para intentar revertir el proceso antes de que sea demasiado tarde. Mientras tanto, el humano Johnny se convierte en el monstruo y empieza a disfrutar de su nueva forma.',
                'release_date' => '2022-01-14',
                'url' => '',
                'cover_url' => 'https://f005.backblazeb2.com/file/nochedepelis/portadas/Hotel+Transilvania-+Transformani%CC%81a.webp'
            ],
        ];

        Film::insert($films);
    }
}
