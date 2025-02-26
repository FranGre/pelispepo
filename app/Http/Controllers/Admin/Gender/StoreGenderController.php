<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenderRequest;
use App\Models\Gender;

class StoreGenderController extends Controller
{
    public function __invoke(StoreGenderRequest $request)
    {
        Gender::create($request->validated());

        return redirect(route('admin.genders.index', absolute: false));
    }
}
