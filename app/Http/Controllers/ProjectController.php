<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Workspace;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProjectController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return ['auth'];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO: Get projects by workspaceId
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Workspace $workspace)
    {
        return view(
            'projects.create',
            [
                'workspace' => $workspace,
                'viewOptions' => ['BOARD', 'LIST', 'MATRIX']
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $attributes = $request->validated();
        $workspace = Workspace::findOrFail($request['workspaceId']);
        $project = $workspace->projects()->create([
            'name' => $attributes['name']
        ]);

        return redirect('/projects/' . $project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
