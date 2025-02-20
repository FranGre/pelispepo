<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Storage;
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

        $temporalPath = storage_path('/app/tmp/films');

        $filmAbsolutePath = File::allFiles($temporalPath)[0];

        $definitePath = storage_path('/app/films');

        if (!File::exists($definitePath)) {
            File::makeDirectory($definitePath);
        }

        $extension = pathinfo($filmAbsolutePath, PATHINFO_EXTENSION);

        $filename = "$film->id.$extension";

        //Storage::move($film, $definitePath);
        File::move($filmAbsolutePath, $definitePath . "/$filename");

        return redirect(route('admin.films.index'));
    }
}
