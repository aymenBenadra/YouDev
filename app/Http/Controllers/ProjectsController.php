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
}
