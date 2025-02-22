<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use File;
use Illuminate\Http\Request;

class DestoryFilmController extends Controller
{
    public function __invoke(string $filmId)
    {
        $film = Film::find($filmId);
        $film->delete();

        $filmsFolder = public_path('storage/films');

        $filmPath = glob("$filmsFolder/$film->id.*");
        File::delete($filmPath);
    }
}
