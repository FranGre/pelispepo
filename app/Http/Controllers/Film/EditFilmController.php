<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Gender;
use App\Services\Film\FilmStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EditFilmController extends Controller
{
    protected FilmStorageService $filmStorageService;
    protected FilmTemporaryStorageService $filmTemporaryStorageService;

    public function __construct(FilmStorageService $filmStorageService, FilmTemporaryStorageService $filmTemporaryStorageService)
    {
        $this->filmStorageService = $filmStorageService;
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
    }

    public function edit(string $filmId): Response
    {
        $film = Film::select('id', 'user_id', 'title', 'description', 'release_date')->findOrFail($filmId);
        $selectedGenderIds = $film->genders->pluck('id');
        $genders = Gender::select('id', 'name')->get();
        $hasVideo = glob($this->filmStorageService->definitivePath . "/$film->id.*") != null ? true : false;
        $csrfToken = csrf_token();

        return Inertia::render('Admin/Films/Show', ['film' => $film, 'selectedGenderIds' => $selectedGenderIds, 'genders' => $genders, 'hasVideo' => $hasVideo, 'csrfToken' => $csrfToken]);
    }

    public function update(Request $request)
    {
        // validar la request antes de que llegue
        $id = $request->input('id');
        $film = Film::findOrFail($id);

        $title = $request->input('title');
        $film->title = $title;

        $description = $request->input('description');
        $film->description = $description;

        $release_date = $request->input('release_date');
        $film->release_date = $release_date;

        $film->save();

        $selectedGendersIds = $request->input('selectedGenderIds');

        $film->genders()->sync($selectedGendersIds);

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
