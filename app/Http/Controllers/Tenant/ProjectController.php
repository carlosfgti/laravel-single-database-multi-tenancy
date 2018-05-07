<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use App\Tenant\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $request->tenant()->projects()->create([
            'name' => $request->name
        ]);

        return back();
    }


    public function show(Project $project)
    {
        return view('tenant.projects.show', compact('project'));
    }


    public function update(Request $request, Project $project)
    {
        $project->update($request->only('name'));

        return back();
    }
}
