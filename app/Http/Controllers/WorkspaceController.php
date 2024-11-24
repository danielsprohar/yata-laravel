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

    public function update(Workspace $workspace)
    {
        request()->validate([
            'name' => ['required', 'max:128']
        ], [
            'name.required' => 'Name is required',
            'name.max' => 'Name must be less than or equal to 128 characters',
        ]);

        $workspace->name = request('name');
        $workspace->save();

        return redirect('/workspaces' . $workspace->id);
    }

    public function destroy(Workspace $workspace)
    {
        $workspace->delete();
        return redirect('/workspaces');
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'max:128']
        ], [
            'name.required' => 'Name is required',
            'name.max' => 'Name must be less than or equal to 128 characters',
        ]);

        $workspace = Workspace::create([
            'name' => request('name')
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
        // $workspace = Workspace::find($id);
        // if ($workspace == null) {
        //     abort(404);
        // }

        return view('workspaces.show', [
            'workspace' => $workspace
        ]);
    }
}
