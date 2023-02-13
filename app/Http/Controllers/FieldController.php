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
            'fieldName' => ['required','min:3', 'max:50'],
        ]);
        //Field::create($request->all());

        $field = Field::create([
            'fieldName' => $request->fieldName,
        ]);

        //$field->uploadFile($request->file('fond'));
        return redirect()->route('fields.show-field');
        // переделать - создать рабочее пространство
    }

    public function show($field_id)
    {
        //$field = Field::find($field_id);
        return view('/dashboard', [
            'users' => Field::find($field_id)->users,
            'field' => Field::find($field_id),
            'projects' => Project::all()->where('fields_id', $field_id),
           // 'selected' => $field,
        ]);


    }


}
