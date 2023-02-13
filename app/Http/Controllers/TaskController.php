<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function  index()
    {
        //
    }

    public function create()
    {
        return view('tasks.create-task');
        /*$project = Project::find($project_id);
        return view('tasks.create-task',[
            'projects' => Project::all() -> where('fields_id', $project->fields_id),
            'tasks' => $project->tasks,
        ]);*/
    }

    public function store(Request $request)
    {
        $request->validate([
            'taskName' => ['required', 'max:50'],
        ]);

        $task = Task::create([
            'taskName' => $request->taskName,
            'project_id' => $request->project_id
        ]);

        return redirect()->route('layouts.show-tasks');

    }

    public function show($project_id)
    {
        $project = Project::find($project_id);
        return view('/dashboard', [
            'field' => Field::find($project->fields_id),
            'projects' => Project::all() -> where('fields_id', $project->fields_id),
            'tasks' => $project->tasks,
            'selected' => $project,
        ]);
    }

    public function edit($id)
    {
//        $task = Task::find($id);
        return view('tasks.update-tasks', [
            'tasks' => Task::find($id),
            'projects' => Project::projekt(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project' => ['required'],
            'taskName' => ['required', 'max:100'],
            'content' => ['required', 'max:1000'],
        ]);
        $task = Task::find($id);
        $task->update($request->all());
        return back();
        //return redirect()->route('task.index');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return back();
    }
}
