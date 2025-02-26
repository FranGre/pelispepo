<?php

namespace App\Http\Controllers\Admin\Film;

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

        $user_id = auth()->id();

        return Inertia::render('Admin/Films/Create', ['genders' => $genders, 'csrfToken' => $csrfToken, 'user_id' => $user_id]);
    }
}
