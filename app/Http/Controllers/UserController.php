<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index()
    {
        //
    }

    public function  show($user_id)
    {
        $user = User::find($user_id);
       /* $fields = $user->fields;
        return $fields;*/

        return view('/dashboard', [
            //'fields' => Team::all() -> where('user_id', $user_id),
            'fields' => $user->fields,
        ]);
    }

}
