<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class DashboardController 
{
    public function index()
    {
        return view('user.dashboards.index');    
    }
}
