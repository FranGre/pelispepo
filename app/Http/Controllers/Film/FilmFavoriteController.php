<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FilmFavoriteController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::find(auth()->id());
        $favoriteFilmsByUser = $user->favoriteFilms();

        $title = $request->input('title');

        if ($title) {
            $favoriteFilmsByUser = $favoriteFilmsByUser->where('title', 'LIKE', '%' . $title . '%');
        }

        $favoriteFilmsByUser = $favoriteFilmsByUser->get();


        return Inertia::render('Films/Favorites', ['films' => $favoriteFilmsByUser]);
    }
}
