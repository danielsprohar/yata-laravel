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

    public function remove()
    {
        return view('workspaces.remove');
    }

    public function destroy($id)
    {
        $workspace = Workspace::findOrFail($id);
        $workspace->delete();
        return redirect('/workspaces');
    }

    public function store()
    {
        $workspaceName = request('workspaceName');
        $nameLength = strlen($workspaceName);
        if ($nameLength < 1) {
            return redirect('/workspaces/create')
                ->withErrors([
                    'name.length' => 'Name is required'
                ]);
        }
        if ($nameLength > 128) {
            return redirect('/workspaces/create')
                ->withErrors([
                    'name.length' => 'Name must be less than 128 characters'
                ]);
        }

        $workspace = Workspace::create([
            'name' => $workspaceName
        ]);

        return redirect('/workspaces/' . $workspace->id);
    }

    public function index(Request $request)
    {
        $size = $request->query('size', 10);

        $workspaces = Workspace::latest()->paginate($size);

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
