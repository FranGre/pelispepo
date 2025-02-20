<?php

namespace App\Http\Controllers\FilePond;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

class PostFilmController extends Controller
{
    public function __invoke(Request $request)
    {
        $uuid = (string) Str::uuid();

        return response($uuid);
    }
}
