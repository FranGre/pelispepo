<?php

namespace Database\Seeders\Film;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class Terror extends Seeder
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
                'title' => "Five Nights at Freddy's",
                'description' => 'Un joven acepta un trabajo como vigilante nocturno en una pizzería, pero pronto descubre que los animatrónicos cobran vida por la noche. Atrapado en el edificio, deberá usar su ingenio para sobrevivir a los horrores que acechan en las sombras, mientras desentraña los secretos oscuros de la pizzería y los siniestros sucesos que ocurrieron en el pasado.',
                'release_date' => '2023-10-27',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Asesinos Sádicos',
                'description' => 'Un grupo de amigos se ve envuelto en una pesadilla cuando una familia de asesinos sádicos los secuestra y lleva a una casa aislada. Los jóvenes deberán hacer todo lo posible para sobrevivir, enfrentando aterradoras pruebas y luchando contra sus propios miedos, mientras descubren que los asesinos tienen un oscuro y retorcido propósito.',
                'release_date' => '2022-05-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'El exorcismo de Carmen Farías',
                'description' => 'Carmen Farías, una joven poseída por una fuerza demoníaca, enfrenta la lucha más grande de su vida cuando un sacerdote es llamado para realizar el exorcismo. A medida que las fuerzas del mal se desatan, la batalla entre el bien y el mal alcanza niveles inesperados, llevando a los personajes al límite de la desesperación y el terror.',
                'release_date' => '2021-11-03',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Enterrados vivos',
                'description' => 'Un hombre se despierta en un ataúd enterrado bajo tierra sin recordar cómo llegó allí. Con el aire agotándose y el miedo apoderándose de él, debe encontrar una manera de escapar antes de que el tiempo se agote. A medida que lucha por sobrevivir, descubre secretos que cambiarán su percepción de la vida y la muerte.',
                'release_date' => '2021-06-11',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Exorcismo En El Séptimo Día',
                'description' => 'Una joven se convierte en el blanco de un demonio antiguo que toma posesión de su cuerpo. Un sacerdote es llamado para llevar a cabo un exorcismo en el séptimo día, pero descubre que la lucha es más complicada de lo que pensaba. El demonio tiene planes mucho más oscuros y peligrosos que los que imaginaban.',
                'release_date' => '2021-12-31',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Hay alguien en tu casa',
                'description' => 'Un grupo de adolescentes de un pequeño pueblo se ve aterrorizado cuando un asesino enmascarado comienza a acechar a sus víctimas. Cada asesinato revela secretos oscuros y personales, mientras los sobrevivientes intentan descubrir quién está detrás de la máscara antes de que todos sean eliminados uno por uno.',
                'release_date' => '2021-10-06',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Nadie duerme en el bosque esta noche',
                'description' => 'Un grupo de jóvenes se adentra en un bosque aislado para escapar de la ciudad. Sin embargo, pronto descubren que algo extraño acecha entre los árboles. A medida que la noche avanza, los adolescentes deben enfrentarse a fuerzas sobrenaturales y sobrevivir a la terrorífica presencia que los persigue.',
                'release_date' => '2020-10-28',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'Women',
                'description' => 'En una casa apartada, un grupo de mujeres se enfrenta a eventos extraños y perturbadores que amenazan con destruirlas. Entre sus propios secretos y los sucesos paranormales, luchan por entender lo que está ocurriendo mientras intentan escapar de las fuerzas oscuras que las acechan. Un thriller psicológico de terror que desafía los límites de la percepción.',
                'release_date' => '2022-09-15',
                'url' => '',
                'cover_url' => ''
            ],
            [
                'id' => (string) Str::uuid(),
                'user_id' => 1,
                'is_activated' => false,
                'title' => 'The Possession: El origen del mal',
                'description' => 'Una familia se muda a una antigua casa, solo para descubrir que la hija pequeña ha sido poseída por una entidad demoníaca. A medida que la posesión avanza, la familia intenta desesperadamente salvar a la niña, pero se enfrentan a oscuros secretos del pasado de la casa y una maldición que se remonta a siglos atrás.',
                'release_date' => '2016-08-19',
                'url' => '',
                'cover_url' => ''
            ]
        ];

        Film::insert($films);
    }
}