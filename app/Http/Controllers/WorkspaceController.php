<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function all()
    {
        $workspaces = Workspace::all();

        return view('workspaces', [
            'workspaces' => $workspaces
        ]);
    }

    public function findById($id)
    {
        $workspace = Workspace::find($id);
        if ($workspace == null) {
            abort(404);
        }

        return view('workspace', [
            'workspace' => $workspace
        ]);
    }
}
