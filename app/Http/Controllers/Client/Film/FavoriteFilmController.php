<?php

namespace App\Http\Controllers\Client\Film;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FavoriteFilmController extends Controller
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
