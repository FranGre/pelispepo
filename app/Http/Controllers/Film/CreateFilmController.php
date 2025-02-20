<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use File;
use Inertia\Inertia;
use Inertia\Response;

class CreateFilmController extends Controller
{
    public function __invoke(): Response
    {
        $temporalPath = storage_path('/app/tmp/films');
        if (File::exists($temporalPath)) {
            File::deleteDirectory($temporalPath);
        }

        File::makeDirectory($temporalPath);

        $genders = Gender::select('id', 'name')->get();
        $csrfToken = csrf_token();

        return Inertia::render('Admin/Films/Create', ['genders' => $genders, 'csrfToken' => $csrfToken]);
    }
}
