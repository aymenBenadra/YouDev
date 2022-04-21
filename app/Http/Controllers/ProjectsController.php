<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Project};

class ProjectsController extends Controller
{
    public function index()
    {
        return view('user.projects', [
            'projects' => Project::all()
        ]);
    }

    public function show(Project $project)
    {
        return view('user.project', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('user.create-project');
    }

    public function update(Project $project)
    {
        return view('user.update-project', [
            'project' => $project
        ]);
    }

    public function store(Request $request)
    {
        Project::create(array_merge(
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'image_link' => 'required|max:255',
                'github_link' => 'required|max:255',
                'design_link' => 'required|max:255',
            ]),
            [
                'user_id' => auth()->user()->id
            ]
        ));

        return redirect()->route('projects')->with('message', 'Project created successfully!');
    }

    public function edit(Request $request, Project $project)
    {
        $project->update($request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image_link' => 'required|max:255',
            'github_link' => 'required|max:255',
            'design_link' => 'required|max:255',
        ]));

        return redirect()->route('projects')->with('message', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects')->with('message', 'Project deleted successfully!');
    }
}
