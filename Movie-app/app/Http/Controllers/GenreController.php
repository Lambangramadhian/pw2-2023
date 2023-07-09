<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function index()
{

    $genre = new Genre;
    $genres = Genre::all();

    return view('genres.genre', compact('genres'));
}
public function create()
    {
        //
        $genres = Genre::all();
        return view('genres.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        Genre::create($validatedData);
    
        return redirect('/genres')->with('success', 'Genre added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
        $genres = Genre::all();

        return view('genres.edit', compact('genre', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $genre->update($validatedData);
    
        return redirect('/genres')->with('success', 'Genre updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
        $genre->delete();

        return redirect('/genres')->with('success', 'Genre deleted successfully!');
    }
}

