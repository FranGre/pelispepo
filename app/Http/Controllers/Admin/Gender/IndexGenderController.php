<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;


class IndexGenderController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $gendersQuery = Gender::query();

        $search = $request->input('search');

        if ($search) {
            $gendersQuery = $gendersQuery->where('name', 'LIKE', "%$search%");
        }
        $gendersQuery = $gendersQuery->select('id', 'name')->withCount('films')->get();
        return Inertia::render('Admin/Genders/Genders', ['genders' => $gendersQuery]);
    }
}
