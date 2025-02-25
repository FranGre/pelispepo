<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Services\Film\FilmStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Str;

class StoreFilmController extends Controller
{
    protected FilmTemporaryStorageService $filmTemporaryStorageService;
    protected FilmStorageService $filmStorageService;
    public function __construct(FilmTemporaryStorageService $filmTemporaryStorageService, FilmStorageService $filmStorageService)
    {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
        $this->filmStorageService = $filmStorageService;
    }

    public function __invoke(Request $request): RedirectResponse
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $releaseDate = $request->input('releaseDate');
        $selectedGenderIds = $request->input('selectedGenderIds');
        $is_activated = $request->input('is_activated');

        $film = Film::create([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'is_activated' => $is_activated,
            'title' => $title,
            'description' => $description,
            'release_date' => $releaseDate
        ]);

        $film->genders()->attach($selectedGenderIds);

        $temporalPath = $this->filmTemporaryStorageService->temporalPath;

        $filmAbsolutePath = File::allFiles($temporalPath)[0];

        $definitePath = $this->filmStorageService->definitivePath;

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
