<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Gender;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EditFilmController extends Controller
{
    public function edit(string $filmId): Response
    {
        $film = Film::select('id', 'user_id', 'title', 'description', 'release_date')->findOrFail($filmId);
        $selectedGenderIds = $film->genders->pluck('id');
        $genders = Gender::select('id', 'name')->get();

        return Inertia::render('Admin/Films/Show', ['film' => $film, 'selectedGenderIds' => $selectedGenderIds, 'genders' => $genders]);
    }

    public function update(Request $request)
    {
        // validar la request antes de que llegue
        $id = $request->input('id');
        $film = Film::findOrFail($id);

        $title = $request->input('title');
        $film->title = $title;

        $description = $request->input('description');
        $film->description = $description;

        $release_date = $request->input('release_date');
        $film->release_date = $release_date;

        $film->save();

        $selectedGendersIds = $request->input('selectedGenderIds');

        $film->genders()->sync($selectedGendersIds);

        return redirect(route('admin.films.index'));
    }
}
