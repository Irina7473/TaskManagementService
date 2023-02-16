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
        //$users = Team::all() -> where('field_id', $field_id)->pluck('user_id');

        return view('/dashboard', [
            'teams' => Team::all() -> where('field_id', $field_id),
            'users' => $field->users(),
        ]);
    }
}
