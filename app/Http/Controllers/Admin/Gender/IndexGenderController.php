<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Inertia\Response;
use Inertia\Inertia;


class IndexGenderController extends Controller
{
    public function __invoke(): Response
    {
        $genders = Gender::select('id', 'name')->withCount('films')->get();
        return Inertia::render('Admin/Genders/Genders', ['genders' => $genders]);
    }
}
