<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    public function show()
    {
        $users = User::all(); 
        return view('users', compact('users'));
    }

    public function showById($id)
    {
        $user = User::find($id);
        return view('user', compact('user'));
    }

}
