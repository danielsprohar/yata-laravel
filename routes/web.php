<?php

use App\Http\Controllers\WorkspaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::resource('workspaces', WorkspaceController::class);
Route::controller(WorkspaceController::class)->group(function () {
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
