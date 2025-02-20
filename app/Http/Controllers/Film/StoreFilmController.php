<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\FilmGender;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Str;

class StoreFilmController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $releaseDate = $request->input('releaseDate');
        $selectedGenderIds = $request->input('selectedGenderIds');

        $film = Film::create([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'title' => $title,
            'description' => $description,
            'release_date' => $releaseDate
        ]);

        $film->genders()->attach($selectedGenderIds);

        return redirect(route('admin.films.index'));
    }
}
