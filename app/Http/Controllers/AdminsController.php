<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    public function create()
    {
       return view('admins.create') ;
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = new admin($validated);
        $admin->token = md5(rand());
        $admin->save();
       return redirect()->route('admins.index');
    }

    public function index()
    {
        return view ('admins.index');
    }
    
}
