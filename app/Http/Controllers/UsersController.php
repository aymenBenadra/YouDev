<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function register()
    {
        return view('user.register-user');
    }

    public function login()
    {
        return view('user.login-user');
    }

    public function store(Request $request)
    {
        $user = User::create($request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:255',
        ]));

        auth()->login($user);

        return redirect()->route('projects')->with('message', 'User created successfully!');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|max:255',
        ]);

        $user = User::where('email', $request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }

        auth()->login($user);

        return redirect()->route('projects')->with('message', 'You are logged in!');
    }
}
