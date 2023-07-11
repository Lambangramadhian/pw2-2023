<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    //
    public function index()
{
    $movie = new Movie;
    $movies = Movie::all();

    return view('movies.movie', compact('movies'));
}

public function create()
    {
        //
    $genres = Genre::all();
    return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required|image',
            'genre_id' => 'required',
            'country' => 'required',
            'year' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
    
        // Upload the image
        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }
    
        Movie::create($validatedData);
    
        return redirect('/movies')->with('success', 'Movie added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
        $movies = Movie::all();

        return view('movies.edit', compact('movie', 'movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'nullable|image',
            'genre_id' => 'required',
            'country' => 'required',
            'year' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('poster')) {
            // Delete the old image
            Storage::disk('public')->delete('assets/img/' . $movie->poster);
    
            // Upload the new image
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }
    
        $movie->update($validatedData);
    
        return redirect('/movies')->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();

        return redirect('/movies')->with('success', 'Movie deleted successfully!');
    }
}

