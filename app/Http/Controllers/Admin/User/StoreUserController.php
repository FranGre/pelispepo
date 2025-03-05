<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class StoreUserController extends Controller
{
    public function __invoke(StoreUserRequest $request)
    {
        User::create($request->validated());
        return redirect(route('admin.users.index'));
    }
}
