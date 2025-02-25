<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenderRequest;
use App\Models\Gender;
use Str;

class StoreGenderController extends Controller
{
    public function __invoke(StoreGenderRequest $request)
    {
        $validatedData = $request->validated();

        Gender::create([
            'id' => (string) Str::uuid(),
            'name' => $validatedData['name']
        ]);

        return redirect(route('admin.genders.index', absolute: false));
    }
}
