<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class IndexUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $usersQuery = User::query();

        $search = $request->input('search');
        if ($search) {
            $usersQuery = $usersQuery->where(function (Builder $query) use ($search) {
                $query->where('name', 'LIKE', "%$search%")
                    ->orWhere('email', 'LIKE', "%$search%");
            });
        }

        $role = $request->input('role');
        if ($role) {
            $usersQuery = $usersQuery->where('role_id', '=', $role);
        }

        $usersQuery = $usersQuery->select(['id', 'role_id', 'name', 'email', 'is_activated'])
            ->withCount([
                'favoriteFilms' => function (Builder $query) {
                    $query->where('is_activated', true);
                }
            ])->withCount('filmsViews')
            ->get();

        $roles = Role::select('id', 'name')->get();

        return Inertia::render('Admin/Users/Users', ['users' => $usersQuery, 'roles' => $roles]);
    }
}
