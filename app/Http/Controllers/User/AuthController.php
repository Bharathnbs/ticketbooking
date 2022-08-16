<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UsersLoginController extends Controller
{
    public function login()
    {
        return view('loginpage.index');
    }

    public function authenticate(Request $request )
    {
        $validated = $request->validate([
            'email' => 'required|email', 
            'password' =>  'required'
        ]);

        if(auth::attempt($validated))
        {
            
            $request->session()->regenerate();

            return redirect()->route('users.create');
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

