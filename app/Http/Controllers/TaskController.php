<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Field;
use App\Models\File;
use App\Models\Project;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        //
    }

    //работает
    public function store(Request $request)
    {
        $request->validate([
            'taskName' => ['required', 'max:50'],
//            'deadline' => ['required'],
//            'description' => ['required'],
        ]);

        $project_id = $request->project_id;
        Task::create([
            'taskName' => $request->taskName,
            'project_id' => $project_id,
//            'deadline' => $request->deadline,
        ]);

        return redirect()->route('projects.show', $project_id);
    }

    public function edit($id)
    {
        //
    }

    //работает
    public function update(Request $request, $id)
    {
        $request->validate([
            'taskName' => ['required', 'max:50'],
        ]);

        $task = Task::find($id);
        $task->update($request->all());

        $project_id = $task->project_id;
        return redirect()->route('projects.show', $project_id);
    }

    //работает
    public function destroy($id)
    {
        $task = Task::find($id);
        $project_id = $task->project_id;
        $task->delete();
        return redirect()->route('projects.show', $project_id);
    }

    public function show($task_id)
    {
        $task = Task::find($task_id);
        $project = Project::find($task->project_id);
        $field = Field::find($project->field_id);
        return view('tasks.show-task', [
            'field' => $field,
            'users' => $field -> users -> sortBy('name') ,
            'teams' => Team::all()->where('field_id', $field->id),
            'projects' => $field -> projects,
            'selected' => $project,
            'project' => $project,
            'task' => $task,
            'comments' => Comment::all() -> where('task_id', $task_id),
            'files' => File::all() -> where('task_id', $task_id),
        ]);
    }


}
