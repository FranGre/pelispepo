<?php

namespace Database\Seeders;

use App\Models\Film;
use Database\Seeders\Film\Alien;
use Database\Seeders\Film\AntMan;
use Database\Seeders\Film\Avatar;
use Database\Seeders\Film\BadBoys;
use Database\Seeders\Film\Barbie;
use Database\Seeders\Film\Batman;
use Database\Seeders\Film\BobEsponja;
use Database\Seeders\Film\CapitanAmercia;
use Database\Seeders\Film\Cars;
use Database\Seeders\Film\ComandoEspecial;
use Database\Seeders\Film\Deadpool;
use Database\Seeders\Film\Disney;
use Database\Seeders\Film\Divergente;
use Database\Seeders\Film\DragonBall;
use Database\Seeders\Film\ElCorredorDelLaberinto;
use Database\Seeders\Film\ElHobbit;
use Database\Seeders\Film\ElSenorDeLosAnillos;
use Database\Seeders\Film\ElZorro;
use Database\Seeders\Film\EscapeRoom;
use Database\Seeders\Film\EscuadronSuicida;
use Database\Seeders\Film\FastAndFurious;
use Database\Seeders\Film\Godzilla;
use Database\Seeders\Film\GuardianesDeLaGalaxia;
use Database\Seeders\Film\HarryPotter;
use Database\Seeders\Film\HeroeDeCentroComercial;
use Database\Seeders\Film\Hot;
use Database\Seeders\Film\HotelTransilvania;
use Database\Seeders\Film\IceAge;
use Database\Seeders\Film\Insidious;
use Database\Seeders\Film\IronMan;
use Database\Seeders\Film\It;
use Database\Seeders\Film\JohnWick;
use Database\Seeders\Film\Joker;
use Database\Seeders\Film\KungFuPanda;
use Database\Seeders\Film\LaLigaDeLaJusticia;
use Database\Seeders\Film\LaMatanzaDeTexas;
use Database\Seeders\Film\LaMonja;
use Database\Seeders\Film\LaMujerDeNegro;
use Database\Seeders\Film\LasTortugasNinja;
use Database\Seeders\Film\LosJuegosDelHambre;
use Database\Seeders\Film\LosVengadores;
use Database\Seeders\Film\Madagascar;
use Database\Seeders\Film\Marvel;
use Database\Seeders\Film\Matrix;
use Database\Seeders\Film\Megalodon;
use Database\Seeders\Film\Militar;
use Database\Seeders\Film\MonsterHigh;
use Database\Seeders\Film\Monstruos;
use Database\Seeders\Film\MortalKombat;
use Database\Seeders\Film\NuestraPandilla;
use Database\Seeders\Film\Otras;
use Database\Seeders\Film\PhineasYFerb;
use Database\Seeders\Film\PiratasDelCaribe;
use Database\Seeders\Film\Predator;
use Database\Seeders\Film\Ralph;
use Database\Seeders\Film\Rambo;
use Database\Seeders\Film\RegresoAlFuturo;
use Database\Seeders\Film\RobinHood;
use Database\Seeders\Film\Rocky;
use Database\Seeders\Film\Romace;
use Database\Seeders\Film\ScaryMovie;
use Database\Seeders\Film\Shrek;
use Database\Seeders\Film\SpaceJam;
use Database\Seeders\Film\Spiderman;
use Database\Seeders\Film\StarWars;
use Database\Seeders\Film\Ted;
use Database\Seeders\Film\Terror;
use Database\Seeders\Film\Thor;
use Database\Seeders\Film\TomYJerry;
use Database\Seeders\Film\ToyStory;
use Database\Seeders\Film\Transformers;
use Database\Seeders\Film\UnLugarTranquilo;
use Database\Seeders\Film\Venom;
use Database\Seeders\Film\XMen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            Alien::class,
            AntMan::class,
            Avatar::class,
            BadBoys::class,
            Barbie::class,
            Batman::class,
            BobEsponja::class,
            CapitanAmercia::class,
            Cars::class,
            ComandoEspecial::class,
            Deadpool::class,
            Disney::class,
            Divergente::class,
            DragonBall::class,
            ElCorredorDelLaberinto::class,
            ElHobbit::class,
            ElSenorDeLosAnillos::class,
            ElZorro::class,
            EscapeRoom::class,
            EscuadronSuicida::class,
            FastAndFurious::class,
            Godzilla::class,
            GuardianesDeLaGalaxia::class,
            HarryPotter::class,
            HeroeDeCentroComercial::class,
            Hot::class,
            HotelTransilvania::class,
            IceAge::class,
            Insidious::class,
            IronMan::class,
            It::class,
            JohnWick::class,
            Joker::class,
            KungFuPanda::class,
            LaLigaDeLaJusticia::class,
            LaMatanzaDeTexas::class,
            LaMonja::class,
            LaMujerDeNegro::class,
            LasTortugasNinja::class,
            LosJuegosDelHambre::class,
            LosVengadores::class,
            Madagascar::class,
            Marvel::class,
            Matrix::class,
            Megalodon::class,
            Militar::class,
            MonsterHigh::class,
            Monstruos::class,
            MortalKombat::class,
            NuestraPandilla::class,
            Otras::class,
            PhineasYFerb::class,
            PiratasDelCaribe::class,
            Predator::class,
            Ralph::class,
            Rambo::class,
            RegresoAlFuturo::class,
            RobinHood::class,
            Rocky::class,
            Romace::class,
            ScaryMovie::class,
            Shrek::class,
            SpaceJam::class,
            Spiderman::class,
            StarWars::class,
            Ted::class,
            Terror::class,
            Thor::class,
            TomYJerry::class,
            ToyStory::class,
            Transformers::class,
            UnLugarTranquilo::class,
            Venom::class,
            XMen::class
        ]);
    }
}
