<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexFilmController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $filmsQuery = Film::query();
        $title = $request->query('title');

        if ($title) {
            $filmsQuery = $filmsQuery->where('title', 'LIKE', "%$title%");
        }
        // favorites
        $filmsQuery = $filmsQuery->with(['creator' => function($query) { $query->select('id', 'email'); } ])->select('id', 'user_id', 'is_activated', 'title', 'release_date')->withCount('likes')->orderBy('title')->get();

        return Inertia::render('Admin/Films/Films', ['films' => $filmsQuery]);
    }
}
