<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexFilmController extends Controller
{
    public function __invoke(): Response
    {
        $films = Film::all();

        return Inertia::render('Admin/Films/Films', ['films' => $films]);
    }
}
