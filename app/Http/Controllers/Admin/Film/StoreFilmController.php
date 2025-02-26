<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Models\Film;
use App\Services\Film\FilmStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\RedirectResponse;

class StoreFilmController extends Controller
{
    protected FilmTemporaryStorageService $filmTemporaryStorageService;
    protected FilmStorageService $filmStorageService;
    public function __construct(FilmTemporaryStorageService $filmTemporaryStorageService, FilmStorageService $filmStorageService)
    {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
        $this->filmStorageService = $filmStorageService;
    }

    public function __invoke(StoreFilmRequest $request): RedirectResponse
    {
        $film = Film::create($request->validated());

        // deberia comprobar si le llegan generos
        $film->genders()->attach($request->input('selectedGenderIds'));

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
