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
        $query = Film::where('is_activated', '=', 1);
        $title = $request->query('title');

        if ($title != null) {
            $query = $query->where('title', 'LIKE', "%$title%");
        }

        $query = $query->select('id', 'title')->get();

        return Inertia::render('Films/Films', ['films' => $query]);
    }
}
