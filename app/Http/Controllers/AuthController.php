<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required' // Assuming role is required during registration
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 1,
        ]);

        return redirect()->route('login');
    }


    public function login()
    {
        return view('auth/login');
    }



    public function loginAction(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Attempt to authenticate the user using Laravel's built-in authentication system
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('/'); // Redirect to the dashboard route
    }

    // If authentication fails, redirect back with error message
    return redirect()->route('login')->withErrors([
        'email' => 'These credentials do not match our records.',
    ]);
}

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function dashboard(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard'); 
    }

    public function profile()
    {
        return view('profile');
    }
}
