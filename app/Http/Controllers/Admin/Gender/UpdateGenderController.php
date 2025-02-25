<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGenderRequest;
use App\Models\Gender;
use Illuminate\Http\RedirectResponse;

class UpdateGenderController extends Controller
{
    public function __invoke(UpdateGenderRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        $gender = Gender::findOrFail($validatedData['id']);
        $gender->name = $validatedData['name'];
        $gender->save();

        return redirect(route('admin.genders.index', absolute: false));
    }
}
