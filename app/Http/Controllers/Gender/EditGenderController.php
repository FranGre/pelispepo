<?php

namespace App\Http\Controllers\Gender;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGenderRequest;
use App\Models\Gender;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EditGenderController extends Controller
{
    public function edit(string $genderId): Response
    {
        $gender = Gender::findOrFail($genderId);
        return Inertia::render('Admin/Genders/Edit', ['gender' => $gender]);
    }

    public function update(UpdateGenderRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        $gender = Gender::findOrFail($validatedData['id']);
        $gender->name = $validatedData['name'];
        $gender->save();

        return redirect(route('admin.genders.index', absolute: false));
    }
}
