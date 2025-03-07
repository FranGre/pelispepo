<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ToggleActivationUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::findOrFail($request->userId);
        $user->is_activated = !$user->is_activated;

        $user->save();
    }
}
