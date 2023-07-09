<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

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
            'poster' => 'required',
            'genre_id' => 'required',
            'country' => 'required',
            'year' => 'required|integer',
            'rating' => 'required|numeric',
    ]);

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'country' => 'required',
            'year' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
    
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

