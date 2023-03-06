<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function  index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function update(Request $request, $id)
    {
       /* $field = Field::find($id);

        $field -> update([
            'fieldName' => $request->fieldName,
        ]);
        $field -> uploadFile ($request->file('fond'));

        $user_id = $request->user_id;
        return redirect()->route('users.show', $user_id);*/
    }

    public function destroy(Request $request, $id)
    {
        /*$field_id = $request->field_id;
        $user_id = $request->user_id;
        if ($user_id == $id) return back();
        else {
            $team = Team::all()->where('field_id', $field_id)->where('user_id', $user_id);
            $team->delete();
            return back();
        }*/

        $team = Team::find($id);
        $team->delete();
        return back();
    }

    public function show($field_id)
    {
        $field = Field::find($field_id);
        return view('teams.show-team', [
            'field' => $field,
            'users' => $field -> users -> sortBy('name') ,
            'teams' => Team::all()->where('field_id', $field->id),
            'projects' => $field -> projects,

        ]);
    }
}
