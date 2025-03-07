<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class DestroyUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $userId = $request->userId;

        // eliminar likes de las pelis
        DB::table('film_user_likes')->where('user_id', '=', $userId)->delete();

        // eliminar favoritos de las pelis
        DB::table('film_user_favorites')->where('user_id', '=', $userId)->delete();

        // si eliminas un admin, las peliculas que dicho admin ha creado y los generos, no deberian eliminarse

        $user = User::findOrFail($userId);

        $user->delete();
    }
}
