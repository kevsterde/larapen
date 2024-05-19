<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login()
    {

        return view('auth.login');
    }

    public function authenticate()
    {


        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login Successfully');
        }

        return redirect()->route('login')->withErrors(['email' => "No Credentials found"]);
    }


    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
    public function store()
    {

        // dd(request());
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('login')->with('success', 'Account Created Successfully');
    }

    public function forgotpassword()
    {
        return view('auth.forgotPassword');
    }
}
