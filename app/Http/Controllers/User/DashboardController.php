<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;

class DashboardController 
{
    public function index()
    {
        $user =User::get();
        $movies = Movie::get();
        $genres = Movie::select('genres','images')->where('genres','=','action and drama')->get();
        return view('user.dashboards.index', ['movies' => $movies, 'genres' =>  $genres]);    
    }
}
