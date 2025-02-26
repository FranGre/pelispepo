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
        $gender = Gender::findOrFail($request->input('id'));
        $gender->update($request->validated());

        return redirect(route('admin.genders.index', absolute: false));
    }
}
