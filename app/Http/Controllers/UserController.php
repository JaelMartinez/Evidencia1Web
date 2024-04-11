<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
}

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->description = $request->description;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');
    }
}