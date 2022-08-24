<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController
{
    public function create()
    {
       return view('user.users.create') ;
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|max:10'
        ]);

        $user = new User($validated);
        $user->password = bcrypt($validated['password']);
        $user->save();

        return redirect()->route('user.dashboard.index');
    }
}

