<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function  index()
    {
        //
    }

    //работает
    public function create(Request $request)
    {
        $field_id = $request->field_id;
        return view('projects.create-project',  [
            'field' => Field::find($field_id),
        ]);
    }

    //работает
    public function store(Request $request)
    {
        $request->validate([
            'projectName' => ['required','min:3', 'max:50'],
        ]);

        $field_id = $request->field_id;
        Project::create([
            'projectName' => $request->projectName,
            'field_id' => $field_id,
        ]);

        return redirect()->route('fields.show', $field_id);
    }

    //работает
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit-project', [
            'project' => $project,
            'field' =>Field::find($project->field_id),
        ]);
    }

    //работает
    public function update(Request $request, $id)
    {
        $request->validate([
            'projectName' => ['required', 'min:3', 'max:50'],
        ]);

        $project = Project::find($id);
        $project -> update($request->all());

        $field_id = $project->field_id;
        return redirect()->route('fields.show', $field_id);
    }

    //работает
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        $field_id = $project->field_id;
        return redirect()->route('fields.show', $field_id);
    }

    public function show($project_id)
    {
        $project = Project::find($project_id);
        $field = Field::find($project->field_id);
        return view('projects.show-project', [
            'field' => $field,
            'users' => $field -> users -> sortBy('name') ,
            'teams' => Team::all()->where('field_id', $field->id),
            'projects' => $field -> projects,
            'selected' => $project,
            'tasks' => $project->tasks->sortBy('taskName'),
        ]);
    }
}
