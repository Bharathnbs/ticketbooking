<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController 
{
    public function login()
    {
        return view('user.login.index');
    }

    public function authenticate(Request $request )
    {
        $validated = $request->validate([
            'email' => 'required|email', 
            'password' =>  'required'
        ]);

        if(Auth::attempt($validated)) {    
            $request->session()->regenerate();
            return redirect()->route('user.users.create');
        }
        
        return back()->withErrors([
            $errMessage = 'please check email and password'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login');
        
    }
}

