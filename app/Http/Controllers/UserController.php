<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index()
    {
        //
    }

   /* public function show($user_id)
    {
        //$teams = Team::all()->where('user_id', $user_id)->pluck('field_id');
       // $teams = Field_user::all()->where('user_id', $user_id)->pluck('field_id');
        $user = User::find($user_id);
        $field_id = Team::all()->where('user_id', $user_id)->pluck('field_id');
        $fields = null;
        foreach ($field_id as $id)
        //$fields = Field::all()->where('id', id);
        //$fields = $user -> fields();
        return view('fields.show-field', [
            'user' => $user,
            'fields' => $fields,
            //'fields' =>$fields,
        ]);
    }*/

    public function show($user_id)
    {
        $teams = Team::all()->where('user_id', $user_id)->pluck('field_id');
        return view('fields.show-field', [
            'user' => User::find($user_id),
            'fields' => Field::find($teams),
        ]);
    }

}
