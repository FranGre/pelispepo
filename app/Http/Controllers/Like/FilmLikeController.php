<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Str;

class FilmLikeController extends Controller
{
    public function __invoke(Request $request)
    {
        $filmId = $request->input('filmId');
        $like = DB::table('film_user_likes')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->first();

        if ($like == null) {
            DB::table('film_user_likes')->insert([
                'id' => (string) Str::uuid(),
                'film_id' => $filmId,
                'user_id' => auth()->id()
            ]);
        } else {
            $like = DB::table('film_user_likes')->where('film_id', '=', $filmId)->where('user_id', '=', auth()->id())->delete();
        }
    }
}
