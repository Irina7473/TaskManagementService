<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index($field_id)
    {
        //
    }

    //работает
    public function create()
    {
        return view('fields.create-field', [
            'users' => User::all(),
            ]);
    }

    //работает - добавить про картинки и команду
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

        $user_id = $request->user_id;
        Team::create([
            'field_id' => $field->id,
            'user_id' => $user_id,
            // по умолчанию создает поля менеждер - продумать связь с БД
            'role_id' => 2,
        ]);

        $teams = Team::all()->where('user_id', $user_id)->pluck('field_id');

        return view ('fields.show-field', [
            'user' => User::find($user_id),
            'fields' => Field::find($teams),
        ]);

    }

    //работает
    public function edit($id)
    {
        return view('fields.edit-field', [
            'field' =>Field::find($id),
        ]);
    }

    //работает - добавить про картинки и команду
    //добавление участников через приглашение на почту
    public function update(Request $request, $id)
    {
        $request->validate([
            'fieldName' => ['required', 'min:3', 'max:50'],
        ]);

        $field = Field::find($id);
        $field -> update($request->all());

        return back();
    }

    //НЕ ПОЛЬЗОВАТЬСЯ! -доделать с каскадным удалением
    public function destroy($id)
    {
        /*
        $field = Field::find($id);
        $teams = Team::all()->where('field_id', $id);

        $teams->delete();  //не работает - выдает ошибку
        $field->delete();

        return back();
        */
    }

    //работает
    public function show($field_id)
    {
        $field = Field::find($field_id);
        return view('/dashboard', [
            'users' => $field->users,
            'field' => $field,
            'projects' => Project::all()->where('field_id', $field_id),
            'selected' => $field,
            'fieldID'=> $field->id,
        ]);
    }

}
