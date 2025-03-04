<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LikesFilmContoller extends Controller
{
    public function __invoke(Request $request, string $filmId)
    {
        $film = Film::find($filmId, ['id', 'title']);
        $usersIds = DB::table('film_user_likes')->where('film_id', '=', $filmId)->pluck('user_id');

        $users = User::whereIn('id', $usersIds)->select(['name', 'email'])->get();

        return Inertia::render('Admin/Films/Likes', ['film' => $film, 'users' => $users]);
    }
}
