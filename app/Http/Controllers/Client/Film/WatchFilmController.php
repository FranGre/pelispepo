<?php

namespace App\Http\Controllers\Client\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use DB;
use Inertia\Inertia;
use Inertia\Response;

class WatchFilmController extends Controller
{
    public function __invoke(string $filmId): Response
    {
        $film = Film::select('id', 'title', 'description', 'release_date')->find($filmId);
        $filmsFolder = public_path('storage/films');
        $filmPath = glob("$filmsFolder/$film->id.*");

        $filmUrl = asset('storage/films/' . basename($filmPath[0]));

        $likesCounter = (int) $film->likes()->count();
        $like = DB::table('film_user_likes')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();

        $hasLike = true;
        if ($like == null) {
            $hasLike = false;
        }

        $favorite = DB::table('film_user_favorites')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();
        $hasFavorite = true;
        if ($favorite == null) {
            $hasFavorite = false;
        }

        return Inertia::render('Films/Watch', ['film' => $film, 'path' => $filmUrl, 'likesCounter' => $likesCounter, 'hasLike' => $hasLike, 'hasFavorite' => $hasFavorite]);
    }
}
