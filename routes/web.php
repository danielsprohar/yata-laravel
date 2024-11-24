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
    Route::get('/{workspace}', [WorkspaceController::class, 'show']);
    Route::patch('/{workspace}', [WorkspaceController::class, 'update']);
    Route::delete('/{workspace}', [WorkspaceController::class, 'destroy']);
    Route::get('/{workspace}/edit', [WorkspaceController::class, 'edit']);
    Route::get('/{workspace}/delete', [WorkspaceController::class, 'remove']);
});
