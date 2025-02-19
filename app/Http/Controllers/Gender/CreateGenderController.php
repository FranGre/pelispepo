<?php

namespace App\Http\Controllers\Gender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CreateGenderController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Genders/Create');
    }

    public function store(Request $request)
    {

    }
}
