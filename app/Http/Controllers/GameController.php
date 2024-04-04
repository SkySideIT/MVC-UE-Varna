<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Games::all();
        $games = Games::paginate(5);
        return view('index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:50',

            'platform' => 'required|max:10',

            'price' => 'required|integer',

            'quantity' => 'required|integer',

        ]);

        $game = Games::create($validatedData);

        return redirect('/home')->with('success', 'The Game is successfully saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Games::findOrFail($id);

        return view('edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:50',

            'platform' => 'required|max:10',

            'price' => 'required|integer',

            'quantity' => 'required|integer',

        ]);

        Games::whereId($id)->update($validatedData);

        return redirect('/home')->with('success', 'Game data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Games::findOrFail($id);

        $game->delete();

        return redirect('/home')->with('success', 'Game data is successfully deleted');
    }
}
