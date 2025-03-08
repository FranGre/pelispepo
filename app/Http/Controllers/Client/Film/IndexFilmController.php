<?php

namespace App\Http\Controllers\Client\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexFilmController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $queryFilms = Film::where('is_activated', '=', 1);
        $title = $request->query('title');

        if ($title) {
            $queryFilms = $queryFilms->where('title', 'LIKE', "%$title%");
        }

        $queryFilms = $queryFilms
            ->with([
                'cover' => function ($query) {
                    $query->select(['id', 'film_id', 'extension']);
                }
            ])
            ->select('id', 'title')
            ->get();

        return Inertia::render('Films/Films', ['films' => $queryFilms]);
    }
}
