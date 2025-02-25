<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Inertia\Inertia;
use Inertia\Response;

class EditGenderController extends Controller
{
    public function __invoke(string $genderId): Response
    {
        $gender = Gender::findOrFail($genderId);
        return Inertia::render('Admin/Genders/Edit', ['gender' => $gender]);
    }
}
