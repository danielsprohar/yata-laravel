<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkspaceRequest;
use App\Http\Requests\UpdateWorkspaceRequest;
use App\Models\Workspace;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function create()
    {
        return view('workspaces.create');
    }

    public function remove(Workspace $workspace)
    {
        return view('workspaces.remove', ['workspace' => $workspace]);
    }

    public function edit(Workspace $workspace)
    {
        return view('workspaces.edit', [
            'workspace' => $workspace,
        ]);
    }

    public function update(UpdateWorkspaceRequest $request, Workspace $workspace)
    {
        $validated = $request->validated();
        $workspace->name = $validated['name'];
        $workspace->save();

        return redirect('/workspaces/' . $workspace->id);
    }

    public function destroy(Workspace $workspace)
    {
        $workspace->delete();
        return redirect('/workspaces');
    }

    public function store(StoreWorkspaceRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $workspace = Workspace::create([
            'name' => $validated['name']
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

    public function show(Workspace $workspace)
    {
        return view('workspaces.show', [
            'workspace' => $workspace
        ]);
    }
}
