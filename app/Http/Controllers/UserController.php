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

   public function show($user_id)
    {
        $user = User::find($user_id);
        return view('fields.show-field', [
            'user' => $user,
            'fields' => $user->fields -> sortBy('fieldName'),
        ]);
    }


}
