<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class ToggleActivationFilmController extends Controller
{
    public function __invoke(string $filmId)
    {
        $film = Film::findOrFail($filmId);
        $film->is_activated = !$film->is_activated;
        $film->save();
    }
}
