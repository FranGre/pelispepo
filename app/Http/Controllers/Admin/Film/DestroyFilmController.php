<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Cover;
use App\Models\Film;
use DB;
use File;
use Illuminate\Http\Request;

class DestroyFilmController extends Controller
{
    public function __invoke(string $filmId)
    {
        DB::table('film_user_likes')->where('film_id', '=', $filmId)->delete();
        DB::table('film_user_favorites')->where('film_id', '=', $filmId)->delete();


        $cover = Cover::where('film_id', '=', $filmId)->first();

        if ($cover) {
            // remove cover local
            $coversFolder = public_path('storage/covers');
            $coverPath = glob("$coversFolder/$cover->id.*");
            File::delete($coverPath);
            $cover->delete();
        }

        $film = Film::find($filmId);
        // remove film local
        $filmsFolder = public_path('storage/films');
        $filmPath = glob("$filmsFolder/$film->id.*");
        File::delete($filmPath);

        $film->delete();
    }
}
