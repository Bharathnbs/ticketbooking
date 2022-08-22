<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;

class UserBookingsController 
{
    public function create(Request $request, $id,$movie_name)
    {
        $user = User::find($id)->get();
        $movies = Movie::where('name', $movie_name)->get();

        return view('user.bookings.create',['user' => $user, 'location' => $location]);
    }
}
