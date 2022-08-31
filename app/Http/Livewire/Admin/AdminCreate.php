<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-create')->layout('layouts.admin.create');
    }
}
