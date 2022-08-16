<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function create()
    {
       return view('users.create') ;
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'
        ]);

        $user = new user($validated);
        $user->save();
    }
}

