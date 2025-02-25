<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class CreateGenderController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Admin/Genders/Create');
    }
}
