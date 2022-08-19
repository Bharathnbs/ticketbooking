<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

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
      Session::put('loc',$locations[1]->id);
      $loc = Session::get('loc');
      $theatres = Theatre::where('location_id','=',$loc)->get();
      Session::put('tl',$theatres[1]->id);
      $tl = Session::get('tl');
      $movies = Movie::where('theatre_id','=',$tl)->get();
         // dd($movies);   

    return view ('admin.bookings.create', ['users' => $users, 'theatres' => $theatres, 'locations' => $locations, 'movies' => $movies]);
   }  
}
