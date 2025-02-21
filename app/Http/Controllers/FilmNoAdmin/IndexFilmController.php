<?php

namespace App\Http\Controllers\FilmNoAdmin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexFilmController extends Controller
{
    public function __invoke(): Response
    {
        $films = Film::select('id', 'title')->get();

        return Inertia::render('Films/Index', ['films' => $films]);
    }
}
