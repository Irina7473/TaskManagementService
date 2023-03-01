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

    public function show($field_id)
    {
        $field = Field::find($field_id);
        $teams = Team::all() -> where('field_id', $field_id);
        $users = $field -> users();
        return view('teams.show-team', [
            'field' => $field,
            'teams' => $teams,
            'users' => $users,
        ]);
    }
}
