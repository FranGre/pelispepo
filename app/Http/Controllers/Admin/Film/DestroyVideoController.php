<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Services\Film\FilmStorageService;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\Request;

class DestroyVideoController extends Controller
{
    protected FilmStorageService $filmStorageService;
    protected FilmTemporaryStorageService $filmTemporaryStorageService;

    public function __construct(FilmTemporaryStorageService $filmTemporaryStorageService, FilmStorageService $filmStorageService)
    {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
        $this->filmStorageService = $filmStorageService;
    }

    public function __invoke(Request $request)
    {
        $temporalPath = $this->filmTemporaryStorageService->temporalPath;
        if (File::exists($temporalPath)) {
            File::deleteDirectory($temporalPath);
        }

        File::makeDirectory($temporalPath);
        $filmId = $request->input('filmId');

        $video = glob($this->filmStorageService->definitivePath . "/$filmId.*")[0];

        File::delete($video);
    }
}
