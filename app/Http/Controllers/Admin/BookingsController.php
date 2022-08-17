<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;

class BookingsController
{
   public function create()
   {
      $users = User::get();
      $locations = Location::get();
      $theatres = Theatre::get();
      $movies = Movie::get();
    return view ('admin.bookings.create', ['users' => $users, 'locations' => $locations, 'theatres' => $theatres, 'movies' => $movies]);
   }  
}
