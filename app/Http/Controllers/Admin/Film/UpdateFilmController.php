<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use App\Services\Film\FilmStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\Request;

class UpdateFilmController extends Controller
{
    protected FilmStorageService $filmStorageService;
    protected FilmTemporaryStorageService $filmTemporaryStorageService;

    public function __construct(FilmStorageService $filmStorageService, FilmTemporaryStorageService $filmTemporaryStorageService)
    {
        $this->filmStorageService = $filmStorageService;
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
    }

    public function __invoke(UpdateFilmRequest $request)
    {
        $id = $request->input('id');
        $film = Film::findOrFail($id);

        $film->update($request->validated());

        $selectedGendersIds = $request->input('selectedGenderIds');

        // genders
        $film->genders()->sync($selectedGendersIds);

        // films
        if (count(File::allFiles($this->filmTemporaryStorageService->temporalPath)) == 0) {
            return redirect(route('admin.films.index'));
        }
        $filmAbsolutePath = File::allFiles($this->filmTemporaryStorageService->temporalPath)[0];

        $definitePath = $this->filmStorageService->definitivePath;

        if (!File::exists($definitePath)) {
            File::makeDirectory($definitePath);
        }

        $extension = pathinfo($filmAbsolutePath, PATHINFO_EXTENSION);

        $filename = "$film->id.$extension";

        File::move($filmAbsolutePath, $definitePath . "/$filename");

        return redirect(route('admin.films.index'));
    }
}
