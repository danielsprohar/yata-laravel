<?php

use App\Models\Workspace;
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

Route::get('/workspaces', function () {
    $workspaces = Workspace::all();

    return view('workspaces', [
        'workspaces' => $workspaces
    ]);
});

Route::get('/workspaces/{id}', function ($id) {
    $workspace = Workspace::find($id);

    if ($workspace == null) {
        abort(404);
    }

    return view('workspace', [
        'workspace' => $workspace
    ]);
});
