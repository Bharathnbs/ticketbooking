<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Movie;

class MoviesController 
{
    public function create()
    {
        return view ('admin.movies.create', ['location' => Location::get()]);
    }
}
