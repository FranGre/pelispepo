<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CreateUserController extends Controller
{
    public function __invoke()
    {
        $roles = Role::select(['id', 'name'])->get();

        return Inertia::render('Admin/Users/Create', ['roles' => $roles]);
    }
}
