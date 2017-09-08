<?php

namespace App\Http\Controllers;

use app\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['user' => $users]);
    }

    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('users.show', ['users' => $users]);

    }
}
