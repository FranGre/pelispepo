<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Gender;
use App\Services\Film\FilmStorageService;
use Inertia\Inertia;
use Inertia\Response;

class EditFilmController extends Controller
{
    protected FilmStorageService $filmStorageService;

    public function __construct(FilmStorageService $filmStorageService)
    {
        $this->filmStorageService = $filmStorageService;
    }

    public function __invoke(string $filmId): Response
    {
        $film = Film::select('id', 'user_id', 'is_activated', 'title', 'url', 'cover_url', 'description', 'release_date')->findOrFail($filmId);
        $film->is_activated = $film->is_activated == 1 ? true : false;
        $selectedGenderIds = $film->genders->pluck('id');
        $genders = Gender::select('id', 'name')->get();
        //$hasVideo = glob($this->filmStorageService->definitivePath . "/$film->id.*") != null ? true : false;
        $csrfToken = csrf_token();

        return Inertia::render('Admin/Films/Edit', ['film' => $film, 'selectedGenderIds' => $selectedGenderIds, 'genders' => $genders, 'csrfToken' => $csrfToken]);
    }
}
