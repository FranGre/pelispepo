<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChangeUserRoleUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $userId = $request->input('userId');
        $roleId = $request->input('roleId');

        $user = User::findOrFail($userId);

        $user->role_id = $roleId;
        $user->save();
    }
}
