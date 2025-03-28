<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Date;
use DB;
use Illuminate\Http\Request;
use Str;

class StoreViewController extends Controller
{
    public function __invoke(Request $request)
    {
        DB::table('film_user_views')->insert([
            'id' => (string) Str::uuid(),
            'film_id' => $request->filmId,
            'user_id' => auth()->id(),
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
