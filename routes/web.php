<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;

Route::get('/', function () {
    return view('inbox');
})->middleware(['auth', 'verified'])->name('inbox');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('auth')->controller(WorkspaceController::class)->group(function () {
    Route::prefix('/workspaces')->group(function () {
        Route::get('/',  'index');
        Route::post('/', 'store');
        Route::get('/create',  'create');
        Route::get('/{workspace}',  'show');
        Route::patch('/{workspace}', 'update');
        Route::delete('/{workspace}', 'destroy');
        Route::get('/{workspace}/edit', 'edit');
        Route::get('/{workspace}/delete',  'remove');
    });
});

Route::get('/workspaces/{workspace}/create/project', [ProjectController::class, 'create'])
    ->middleware('auth')
    ->name('projects.create');

Route::post('/projects', [ProjectController::class, 'store'])
    ->middleware('auth')
    ->name('projects.show');

Route::get('/projects/{project}', [ProjectController::class, 'show'])
    ->middleware('auth')
    ->name('projects.show');


require __DIR__ . '/auth.php';
