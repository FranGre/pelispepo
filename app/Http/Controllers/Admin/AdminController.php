<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Gender;
use App\Models\User;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function __invoke()
    {
        $filmsCounter = Film::count();
        $gendersCounter = Gender::count();
        $usersCounter = User::count();

        return Inertia::render('Admin/Admin', ['filmsCounter' => $filmsCounter, 'gendersCounter' => $gendersCounter, 'usersCounter' => $usersCounter]);
    }
}
