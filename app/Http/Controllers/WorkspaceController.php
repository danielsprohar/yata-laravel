<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function create()
    {
        return view('workspaces.create');
    }

    public function store(Request $request)
    {
        // TODO: create workspace

        return redirect('/workspaces');
    }

    public function index(Request $request)
    {
        $size = $request->query('size', 10);

        $workspaces = Workspace::paginate($size);

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
