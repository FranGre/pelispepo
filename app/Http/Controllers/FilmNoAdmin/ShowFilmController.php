<?php

namespace App\Http\Controllers\FilmNoAdmin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use DB;
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

        $likesCounter = (int) $film->likes()->count();
        $like = DB::table('film_user_likes')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();

        $likeMsg = 'Quitar Like';
        if ($like == null) {
            $likeMsg = 'Dar Like';
        }

        $favorite = DB::table('film_user_favorites')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();
        $favoriteMsg = 'Quitar Favs';
        if ($favorite == null) {
            $favoriteMsg = 'Agregar en favs';
        }

        return Inertia::render('Films/Show', ['film' => $film, 'path' => $filmUrl, 'likesCounter' => $likesCounter, 'likeMsg' => $likeMsg, 'favoriteMsg' => $favoriteMsg]);
    }
}
