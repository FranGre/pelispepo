<?php

namespace App\Http\Controllers\Gender;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenderRequest;
use App\Models\Gender;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;
use Str;

class CreateGenderController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Admin/Genders/Create');
    }

    public function store(StoreGenderRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        Gender::create([
            'id' => (string) Str::uuid(),
            'name' => $validatedData['name']
        ]);

        return redirect(route('dashboard', absolute: false));
    }
}
