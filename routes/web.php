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
    Route::post('/', [WorkspaceController::class, 'store']);
    Route::get('/create', [WorkspaceController::class, 'create']);
    Route::get('/{id}', [WorkspaceController::class, 'show']);
    Route::get('/{id}/delete', [WorkspaceController::class, 'remove']);
});
