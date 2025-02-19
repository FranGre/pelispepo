<?php

namespace App\Http\Controllers\Gender;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Inertia\Response;
use Inertia\Inertia;


class GetGenderController extends Controller
{
    public function __invoke(): Response
    {
        $genders = Gender::select('id', 'name')->get();

        return Inertia::render('Admin/Genders/Genders', ['genders' => $genders]);
    }
}
