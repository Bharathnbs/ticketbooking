<?php

namespace App\Http\Livewire\Admin\Theatres;

use Livewire\Component;
use App\Models\Theatre;
use App\Models\Location;


class TheatreIndex extends Component
{
    public $theatres;

    public function mount() 
    {
        $this->theatres = Theatre::with('location')->get();
        dd($this->theatres);
    }

    public function render()
    {
        return view('livewire.admin.theatres.theatre-index')
        ->layout('layouts.admin.theatres.index');
    }
}
