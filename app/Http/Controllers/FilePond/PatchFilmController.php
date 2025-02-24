<?php

namespace App\Http\Controllers\FilePond;

use App\Http\Controllers\Controller;
use App\Services\Film\FilmTemporaryStorageService;
use File;
use Illuminate\Http\Request;

class PatchFilmController extends Controller
{
    protected FilmTemporaryStorageService $filmTemporaryStorageService;

    public function __construct(FilmTemporaryStorageService $filmTemporaryStorageService)
    {
        $this->filmTemporaryStorageService = $filmTemporaryStorageService;
    }

    public function __invoke(Request $request)
    {
        $uploadName = $request->header('Upload-Name');

        $temporalPath = $this->filmTemporaryStorageService->temporalPath;

        //comprobar si trae contenido y si es un video

        if (!File::exists($temporalPath)) {
            File::makeDirectory($temporalPath);
        }

        $extension = pathinfo($uploadName, PATHINFO_EXTENSION);

        file_put_contents(
            $temporalPath . "/film." . $extension,
            $request->getContent(),
            FILE_APPEND
        );

        return response('ok');
    }
}
