<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create() {
        return inertia('Auth/Login');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // generate new session identifier
//            info('Authenticated User:', ['user' => Auth::user()]);
//            echo Auth::user()->name;
//            die();

            // return to the protected page that the user had intended to visit before redirection to login
            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'The provided credentials do not match our records.'
        ]);
    }

    public function destroy(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return;
    }

}
