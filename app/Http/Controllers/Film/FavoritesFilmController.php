<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use DB;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FavoritesFilmController extends Controller
{
    public function __invoke(Request $request)
    {
        $userId = auth()->id();
        $filmsIds = DB::table('film_user_favorites')->where('user_id', '=', $userId)->pluck('film_id');

        $filmsQuery = Film::where('is_activated', true)->whereIn('id', $filmsIds);

        $search = $request->input('search');
        if ($search) {
            $filmsQuery = $filmsQuery->where('title', 'LIKE', "%$search%");
        }

        return Inertia::render('Films/Favorites', ['films' => $filmsQuery->select(['id', 'title'])->get()]);
    }
}
