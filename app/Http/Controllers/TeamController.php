<?php

namespace App\Http\Controllers;

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

    public function show($user_id)
    {
        return view('/dashboard', [
            'fields' => Team::all() -> where('user_id', $user_id),
        ]);
    }
}
