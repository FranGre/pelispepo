<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use File;
use Illuminate\Http\Request;

class DestroyFilmController extends Controller
{
    public function __invoke(string $filmId)
    {
        $film = Film::find($filmId);
        $film->delete();

        $filmsFolder = public_path('storage/films');

        $filmPath = glob("$filmsFolder/$film->id.*");
        // puede ser que no tenga ningun video

        File::delete($filmPath);
    }
}
