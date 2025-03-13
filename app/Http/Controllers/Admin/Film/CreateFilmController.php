<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Services\Cover\CoverTemporaryStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Inertia\Inertia;
use Inertia\Response;

class CreateFilmController extends Controller
{
    protected FilmTemporaryStorageService $filmTemporaryStorageService;
    protected CoverTemporaryStorageService $coverTemporaryStorageService;

    public function __construct(FilmTemporaryStorageService $filmTemporaryStorageService, CoverTemporaryStorageService $coverTemporaryStorageService)
    {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
        $this->coverTemporaryStorageService = $coverTemporaryStorageService;
    }

    public function __invoke(): Response
    {
        $temporalFilmPath = $this->filmTemporaryStorageService->temporalPath;
        if (File::exists($temporalFilmPath)) {
            File::deleteDirectory($temporalFilmPath);
        }
        File::makeDirectory($temporalFilmPath, 755, true);

        $temporalCoverPath = $this->coverTemporaryStorageService->temporalPath;
        if (File::exists($temporalCoverPath)) {
            File::deleteDirectory($temporalCoverPath);
        }
        File::makeDirectory($temporalCoverPath, 755, true);

        $genders = Gender::select('id', 'name')->get();
        $csrfToken = csrf_token();

        $user_id = auth()->id();

        return Inertia::render('Admin/Films/Create', ['genders' => $genders, 'csrfToken' => $csrfToken, 'user_id' => $user_id]);
    }
}
