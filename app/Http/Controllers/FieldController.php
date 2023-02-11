<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Project;
use App\Models\Sound;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index($field_id)
    {
        //$field_id=1;      //поле для открытия
        return view('/dashboard', [
            'field' => Field::find($field_id),
            'projects' => Project::all()->where('fields_id', $field_id)
        ]);
    }


    public function create()
    {
        return view('fields.create-field');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fieldName' => ['required', 'max:50'],

        ]);

        $user = Field::create([
            'fieldName' => $request->userName,

        ]);

        $user->uploadFile($request->file('fond'));
        return redirect()->route('/dashboard');
        // переделать - создать рабочее пространство
    }

    public function show($user_id)
    {
        $teams = Team::all()->where('user_id', $user_id)->pluck('field_id');
        return view('layouts.show-field', [
            'users' => User::find($user_id),
            'fields' => Field::find($teams),
        ]);
    }


}
