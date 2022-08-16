<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\location;

class LocationsController extends Controller
{
    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'state_name' => 'required',
            'location_name' => 'required',
        ]);

        $location = new location($validated);
        $location->save();
       return redirect()->route('admins.index');
    }

    public function edit(Request $request, $id)
    {
        return view('locations.update')
    }
}
