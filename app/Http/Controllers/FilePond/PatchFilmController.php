<?php

namespace App\Http\Controllers\FilePond;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;

class PatchFilmController extends Controller
{
    public function __invoke(Request $request)
    {
        $uploadName = $request->header('Upload-Name');

        $temporalPath = storage_path('/app/tmp/films');

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
