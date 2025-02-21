<?php

namespace App\Http\Controllers\FilmNoAdmin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Inertia\Inertia;
use Inertia\Response;

class ShowFilmController extends Controller
{
    public function __invoke(string $filmId): Response
    {
        $film = Film::select('id', 'title', 'description', 'release_date')->find($filmId);
        $filmsFolder = public_path('storage/films');
        $filmPath = glob("$filmsFolder/$film->id.*");

        $filmUrl = asset('storage/films/' . basename($filmPath[0]));

        return Inertia::render('Films/Show', ['film' => $film, 'path' => $filmUrl]);
    }
}
