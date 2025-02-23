<?php

namespace App\Http\Controllers\Favorite;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Str;

class FilmFavoriteController extends Controller
{
    public function __invoke(Request $request)
    {
        $filmId = $request->input('filmId');
        $like = DB::table('film_user_favorites')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();

        if ($like == null) {
            DB::table('film_user_favorites')->insert([
                'id' => (string) Str::uuid(),
                'film_id' => $filmId,
                'user_id' => auth()->id()
            ]);
        } else {
            $like = DB::table('film_user_favorites')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->delete();
        }
    }
}
