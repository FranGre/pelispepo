<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexFilmController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $search = $request->query('search');
        $createdBy = $request->query('createdBy');

        $filmsQuery = Film::query();

        if ($search) {
            $filmsQuery = $filmsQuery->where(function (Builder $query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('release_date', 'LIKE', "%$search%");
            });
        }

        if ($createdBy) {
            $filmsQuery = $filmsQuery->where('user_id', '=', $createdBy);
        }

        // favorites
        $filmsQuery = $filmsQuery
            ->with([
                'creator' => function ($query) {
                    $query->select('id', 'email');
                }
            ])->select('id', 'user_id', 'is_activated', 'title', 'release_date')
            ->withCount('likes')
            ->orderBy('title')->paginate(12);

        $adminRoleId = Role::where('name', 'LIKE', "%admin%")->pluck('id')->first();

        $admins = User::where('role_id', '=', $adminRoleId)->select(['id', 'name'])->get();

        return Inertia::render('Admin/Films/Films', ['films' => $filmsQuery, 'admins' => $admins]);
    }
}
