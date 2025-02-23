<?php

use App\Http\Controllers\FilePond\PatchFilmController;
use App\Http\Controllers\FilePond\PostFilmController;
use App\Http\Controllers\Film\CreateFilmController;
use App\Http\Controllers\Film\EditFilmController;
use App\Http\Controllers\Film\IndexFilmController;
use App\Http\Controllers\Film\StoreFilmController;
use App\Http\Controllers\FilmNoAdmin\ShowFilmController;
use App\Http\Controllers\Films\DestoryFilmController;
use App\Http\Controllers\Gender\CreateGenderController;
use App\Http\Controllers\Gender\EditGenderController;
use App\Http\Controllers\Gender\GetGenderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    ### Admin ###
    ## Genders ##
    Route::get('admin/genders', GetGenderController::class)->name('admin.genders.index');

    Route::get('admin/genders/create', [CreateGenderController::class, 'create'])->name('admin.genders.create');
    Route::post('admin/genders/store', [CreateGenderController::class, 'store'])->name('admin.genders.store');

    Route::get('admin/genders/{genderId}/edit', [EditGenderController::class, 'edit'])->name('admin.genders.edit');
    Route::patch('admin/genders/{genderId}', [EditGenderController::class, 'update'])->name('admin.genders.update');

    ## Films ##  
    Route::get('admin/films', IndexFilmController::class)->name('admin.films.index');
    Route::delete('admin/films/destroy/{filmId}', DestoryFilmController::class)->name('admin.films.destroy');

    Route::get('admin/films/create', CreateFilmController::class)->name('admin.films.create');
    Route::post('admin/films/store', StoreFilmController::class)->name('admin.films.store');

    Route::get('admin/films/{filmId}/edit', [EditFilmController::class, 'edit'])->name('admin.films.edit');
    Route::patch('admin/films/{filmId}', [EditFilmController::class, 'update'])->name('admin.films.update');

    Route::post('admin/films/post', PostFilmController::class)->name('admin.films.post');
    Route::patch('admin/films/patch/{id}', PatchFilmController::class)->name('admin.films.patch');

    Route::get('films', \App\Http\Controllers\FilmNoAdmin\IndexFilmController::class)->name('films.index');
    Route::get('films/watch/{filmId}', ShowFilmController::class)->name('films.show');
});

require __DIR__ . '/auth.php';
