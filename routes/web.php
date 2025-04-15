<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Cover\PostCoverController;
use App\Http\Controllers\Admin\Film\LikesFilmContoller;
use App\Http\Controllers\Admin\User\ChangeUserRoleUserController;
use App\Http\Controllers\Admin\User\CreateUserController;
use App\Http\Controllers\Admin\User\DestroyUserController;
use App\Http\Controllers\Admin\User\IndexUserController;
use App\Http\Controllers\Admin\Film\DestroyVideoController;
use App\Http\Controllers\Admin\Film\EditFilmController;
use App\Http\Controllers\Admin\Film\ToggleActivationFilmController;
use App\Http\Controllers\Admin\Film\UpdateFilmController;
use App\Http\Controllers\Admin\Gender\IndexGenderController;
use App\Http\Controllers\Admin\Gender\StoreGenderController;
use App\Http\Controllers\Admin\Gender\UpdateGenderController;
use App\Http\Controllers\Admin\User\LikesUserContoller;
use App\Http\Controllers\Admin\User\StoreUserController;
use App\Http\Controllers\Admin\User\ToggleActivationUserController;
use App\Http\Controllers\Client\Film\WatchFilmController;
use App\Http\Controllers\FilePond\PatchFilmController;
use App\Http\Controllers\FilePond\PostFilmController;
use App\Http\Controllers\Admin\Film\CreateFilmController;
use App\Http\Controllers\Admin\Film\IndexFilmController;
use App\Http\Controllers\Admin\Film\StoreFilmController;
use App\Http\Controllers\Admin\Film\DestroyFilmController;
use App\Http\Controllers\Admin\Gender\CreateGenderController;
use App\Http\Controllers\Admin\Gender\EditGenderController;
use App\Http\Controllers\Film\FavoriteFilmController;
use App\Http\Controllers\Film\FavoritesFilmController;
use App\Http\Controllers\Film\LikeFilmController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\View\StoreViewController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
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
    Route::get('admin/users', IndexUserController::class)->name('admin.users.index');

    ## Genders ##
    Route::get('admin/genders', IndexGenderController::class)->name('admin.genders.index');

    Route::get('admin/genders/create', CreateGenderController::class)->name('admin.genders.create');
    Route::post('admin/genders/store', StoreGenderController::class)->name('admin.genders.store');

    Route::get('admin/genders/{genderId}/edit', EditGenderController::class)->name('admin.genders.edit');
    Route::patch('admin/genders/{genderId}', UpdateGenderController::class)->name('admin.genders.update');

    ## Films ##  
    Route::get('admin/films', IndexFilmController::class)->name('admin.films.index');
    Route::delete('admin/films/destroy/{filmId}', DestroyFilmController::class)->name('admin.films.destroy');

    Route::get('admin/films/create', CreateFilmController::class)->name('admin.films.create');
    Route::post('admin/films/store', StoreFilmController::class)->name('admin.films.store');

    Route::get('admin/films/{filmId}/edit', EditFilmController::class)->name('admin.films.edit');
    Route::patch('admin/films/{filmId}', UpdateFilmController::class)->name('admin.films.update');

    Route::post('admin/films/post', PostFilmController::class)->name('admin.films.post');
    Route::patch('admin/films/patch/{id}', PatchFilmController::class)->name('admin.films.patch');

    Route::get('films', \App\Http\Controllers\Client\Film\IndexFilmController::class)->name('films.index');
    Route::get('films/watch/{filmId}', WatchFilmController::class)->name('films.watch');

    Route::post('films/likes', \App\Http\Controllers\Film\LikeFilmController::class)->name('films.like');
    Route::post('films/favorites', FavoriteFilmController::class)->name('films.favorite');

    //Route::get('films/favorites', \App\Http\Controllers\Client\Film\FavoriteFilmController::class)->name('films.favorites');

    Route::delete('admin/films/video/destroy', DestroyVideoController::class)->name('admin.films.video.destroy');

    Route::patch('admin/films/{filmId}/toggle-activation', ToggleActivationFilmController::class)->name('admin.films.toggle.activation');

    Route::get('admin', AdminController::class)->name('admin');

    Route::patch('admin/users/change/role', ChangeUserRoleUserController::class)->name('admin.users.change.role');

    Route::get('genders', GenderController::class)->name('genders');

    Route::get('admin/users/{userId}/likes', LikesUserContoller::class)->name('admin.users.likes');
    Route::get('admin/films/{filmId}/likes', LikesFilmContoller::class)->name('admin.films.likes');

    Route::get('films/favorites', FavoritesFilmController::class)->name('films.favorites');

    Route::get('admin/users/create', CreateUserController::class)->name('admin.users.create');
    Route::post('admin/users/store', StoreUserController::class)->name('admin.users.store');

    Route::patch('admin/users/{userId}/toogle-activation', ToggleActivationUserController::class)->name('admin.users.toggle.activation');

    Route::delete('admin/users/{userId}/destroy', DestroyUserController::class)->name('admin.users.destroy');

    Route::post('admin/covers/post', PostCoverController::class)->name('admin.covers.post');
    Route::post('films/views/store', StoreViewController::class)->name('views.store');
});

require __DIR__ . '/auth.php';
