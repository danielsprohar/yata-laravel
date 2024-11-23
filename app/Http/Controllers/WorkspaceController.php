<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function index()
    {
        $workspaces = Workspace::all();

        return view('workspaces.index', [
            'workspaces' => $workspaces
        ]);
    }

    public function show($id)
    {
        $workspace = Workspace::find($id);
        if ($workspace == null) {
            abort(404);
        }

        return view('workspaces.show', [
            'workspace' => $workspace
        ]);
    }
}
