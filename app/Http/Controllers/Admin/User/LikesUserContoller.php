<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LikesUserContoller extends Controller
{
    public function __invoke(Request $request, $userId)
    {
        $user = User::findOrFail($userId, ['id', 'name']);
        $idFilmsLikes = DB::table('film_user_likes')->where('user_id', '=', $userId)->select('film_id')->pluck('film_id');

        $search = $request->input('search');
        $films = Film::where('is_activated', true)->whereIn('id', $idFilmsLikes);

        if ($search) {
            $films = $films->where('title', 'LIKE', "%$search%");
        }

        $films = $films->select('id', 'title')->get();

        return Inertia::render('Admin/Users/Likes', ['films' => $films, 'user' => $user]);
    }
}
