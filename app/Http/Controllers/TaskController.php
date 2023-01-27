<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function  index()
    {
        //
    }



    public function store(Request $request)
    {
        //
    }

    public function destroy()
    {
        //
    }

    public function show($project_id)
    {
        $user_id=1;
        $project = Project::find($project_id);
        return view('layouts.show-tasks', [
//            'projects' => Project::all(),
            'projects' => Project::all() -> where('fields_id', $user_id),
            'tasks' => $project->tasks,
            'selected' => $project,
        ]);
    }
}
