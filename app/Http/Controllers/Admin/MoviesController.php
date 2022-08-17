<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Theatre;
use App\Models\Movie;

class MoviesController
{
   public function index()
   {
    $movies = Movie::with('theatres')->get();
   //  dd($movies);
    return view( 'admin.movies.index', [ 'movies' => $movies ]);
   } 

   public function create()
   {
    $theatre =Theatre::get();
    return view( 'admin.movies.create', [ 'theatres' => $theatre ]);
   } 
   public function store(Request $request) 
   {
      $validated = $request->validate([
         'theatre_id' => 'required',
         'name' => 'required',
         'genres' => 'required',
         'time' => 'required',
         'date' => 'required',
         'price' => 'required',
      ]);

      $movie = new Movie($validated);
      $movie->save();
      return redirect()->route('admin.movies.index');
   }
   public function edit(Request $request, $id)
   {
      // $movies =  Movie::with('theatres')->find($id);
      // dd($movies);
      return view('admin.movies.update', ['movie' => Movie::find($id), 'theatres' => Theatre::get()]);
   }

   public function update(Request $request, $id)
   {
         $validated = $request->validate([
            'theatre_id' => 'required',
            'name' => 'required',
            'genres' => 'required',
            'time' => 'required',
            'date' => 'required',
            'price' => 'required',
         ]);
         $movie = Movie::find($id);
         $movie->update($validated);
         return redirect()->route('admin.movies.index');
   }
   public function delete(Request $request, $id)         
   {
      $movie = Movie::find($id);
      $movie->delete($id);
      return redirect()->route('admin.movies.index');
   }
}
