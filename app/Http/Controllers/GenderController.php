<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GenderController extends Controller
{
    public function __invoke()
    {
        $genders = Gender::all();

        return Inertia::render('Genders', ['genders' => $genders]);
    }
}
