<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HolaController extends Controller
{
    public function __invoke(Request $request)
    {
        $title = $request->input('title');

        $films = Film::where('title', 'LIKE', "%$title%")->select('id', 'title', 'description', 'release_date')->get();

        return Inertia::render('Films/Index', ['films' => $films]);
    }
}
