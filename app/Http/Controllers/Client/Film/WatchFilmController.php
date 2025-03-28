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
        $film = Film::select('id', 'title', 'url', 'description', 'release_date')->find($filmId);

        $favorite = DB::table('film_user_favorites')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();
        $hasFavorite = true;
        if ($favorite == null) {
            $hasFavorite = false;
        }

        $views_count = DB::table('film_user_views')->where('film_id', '=', $filmId)->count();

        return Inertia::render('Films/Watch', ['film' => $film, 'views_count' => $views_count, 'hasFavorite' => $hasFavorite]);
    }
}
