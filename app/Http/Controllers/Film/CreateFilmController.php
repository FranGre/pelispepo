<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Inertia\Inertia;
use Inertia\Response;

class CreateFilmController extends Controller
{
    protected FilmTemporaryStorageService $filmTemporaryStorageService;

    public function __construct(FilmTemporaryStorageService $filmTemporaryStorageService)
    {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
    }

    public function __invoke(): Response
    {
        $temporalPath = $this->filmTemporaryStorageService->temporalPath;
        if (File::exists($temporalPath)) {
            File::deleteDirectory($temporalPath);
        }

        File::makeDirectory($temporalPath);

        $genders = Gender::select('id', 'name')->get();
        $csrfToken = csrf_token();

        return Inertia::render('Admin/Films/Create', ['genders' => $genders, 'csrfToken' => $csrfToken]);
    }
}
