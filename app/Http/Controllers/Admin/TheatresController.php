<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Theatre;
use App\Models\Location;

class TheatresController 
{
    public function index()
    {
        $theatres = Theatre::with('location')->get();
        // dd($theatres->toArray());
        return view ('admin.theatres.index', ['theatres' => $theatres]);
    }
    public function create()
    {
        return view ('admin.theatres.create', ['location' => Location::get()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'location_id' => 'required',
            'name' => 'required',
            'area' => 'required',
        ]);

        $theatre = new Theatre($validated);
        $theatre->save();
        return redirect()->route('admin.theatres.index');

    }

    public function edit(Request $request, $id)
    {
        return view('admin.theatres.update', ['theatre' => Theatre::find($id), 'location' => Location::get()]);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
           'location_id' => 'required',
           'name' => 'required',
           'area' => 'required', 
        ]);

        $theatre =  Theatre::find($id);
        $theatre->update($validated);
        return redirect()->route('admin.theatres.index');
    }

    public function delete(Request $request, $id)   
    {
        $theatre = Theatre::find($id);
        $theatre->delete();
        return redirect()->route('admin.theatres.index');
    }
}
