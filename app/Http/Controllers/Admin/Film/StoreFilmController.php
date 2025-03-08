<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Models\Cover;
use App\Models\Film;
use App\Services\Cover\CoverStorageService;
use App\Services\Cover\CoverTemporaryStorageService;
use App\Services\Film\FilmStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\RedirectResponse;

class StoreFilmController extends Controller
{
    protected FilmTemporaryStorageService $filmTemporaryStorageService;
    protected FilmStorageService $filmStorageService;
    protected CoverTemporaryStorageService $coverTemporaryStorageService;
    protected CoverStorageService $coverStorageService;

    public function __construct(
        FilmTemporaryStorageService $filmTemporaryStorageService,
        FilmStorageService $filmStorageService,
        CoverTemporaryStorageService $coverTemporaryStorageService,
        CoverStorageService $coverStorageService
    ) {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
        $this->filmStorageService = $filmStorageService;
        $this->coverTemporaryStorageService = $coverTemporaryStorageService;
        $this->coverStorageService = $coverStorageService;
    }

    public function __invoke(StoreFilmRequest $request): RedirectResponse
    {
        $film = Film::create($request->validated());

        // deberia comprobar si le llegan generos
        $film->genders()->attach($request->input('selectedGenderIds'));

        // film
        $filmTemporalPath = $this->filmTemporaryStorageService->temporalPath;
        $filmAbsolutePath = File::allFiles($filmTemporalPath)[0];
        $filmDefinitePath = $this->filmStorageService->definitivePath;

        if (!File::exists($filmDefinitePath)) {
            File::makeDirectory($filmDefinitePath);
        }
        $filmExtension = pathinfo($filmAbsolutePath, PATHINFO_EXTENSION);
        $filmFilename = "$film->id.$filmExtension";
        //Storage::move($film, $definitePath);
        File::move($filmAbsolutePath, $filmDefinitePath . "/$filmFilename");

        // cover
        $coverTemporalPath = $this->coverTemporaryStorageService->temporalPath;
        $coverAbsolutePath = File::allFiles($coverTemporalPath)[0];
        $coverDefinitePath = $this->coverStorageService->definitivePath;

        if (!File::exists($coverDefinitePath)) {
            File::makeDirectory($coverDefinitePath);
        }

        $cover = Cover::create(['film_id' => $film->id, 'original_file_name' => $coverAbsolutePath->getFilename(), 'extension' => $coverAbsolutePath->getExtension()]);
        $coverFilename = $cover->id . "." . $coverAbsolutePath->getExtension();
        File::move($coverAbsolutePath, $coverDefinitePath . "/$coverFilename");

        return redirect(route('admin.films.index'));
    }
}
