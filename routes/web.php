<?php

use App\Http\Controllers\Gender\CreateGenderController;
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

    Route::get('admin/genders/create', [CreateGenderController::class, 'create'])->name('admin.genders.create');
    Route::post('admin/genders/store', [CreateGenderController::class, 'store'])->name('admin.genders.store');
    Route::get('admin/genders', GetGenderController::class)->name('admin.genders.index');
});

require __DIR__ . '/auth.php';
