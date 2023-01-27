<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index()
    {
        return view('layouts.index');
    }

    public function  create()
    {
        return view('users.create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'max:50'],
            'userName' => ['required', 'max:50'],
            'password' => ['required', 'max:50'],
        ]);

        $user = User::create([
            'email' => $request->email,
            'userName' => $request->userName,
            'password' => $request->password
        ]);

        $user->uploadFile ($request->file('avatar'));
        return redirect()->route('user.index');
        // переделать - создать рабочее пространство
    }

    public function auth()
    {
        return view('layouts.login');
    }
}
