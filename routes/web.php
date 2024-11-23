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

Route::prefix('/workspaces')->group(function () {
    Route::get('/', [WorkspaceController::class, 'index']);
    Route::get('/{id}', [WorkspaceController::class, 'show']);
});
