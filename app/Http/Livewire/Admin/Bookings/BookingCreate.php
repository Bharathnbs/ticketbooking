<?php

namespace App\Http\Livewire\Admin\Bookings;

use Livewire\Component;
use App\Models\Location;
use App\Models\Theatre;
use App\Models\Movie;
use App\Models\User;
use App\Models\Booking;


class BookingCreate extends Component
{
    public $users, $locations, $movies, $theatres, $user_id, $location_id, $theatre_id, $movie_id,
    $quantity = 1, $price, $total_price;

    public function mount()
    {
        $this->users = User::get();      
        $this->locations = Location::has('theatres.movies')->get();
        $this->theatres = Theatre::has('movies')->get();
        $this->movies = Movie::get();
    }

    public function locationUpdate()
    {
        $theatre = Theatre::with('location')->get();
        dd($theatre);
        

    }
    
    public function render()
    {
        return view('livewire.admin.bookings.booking-create')->layout('layouts.admin.bookings.create');
    }
}
