<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', ['casts' => $casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:45',
            'umur' => 'required|numeric',
            'bio'  => 'required',
        ]);

        Cast::create($validateData);
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
        return view('cast.show', ['cast' => $cast]);        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        return view('cast.edit', ['cast'=> $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:45',
            'umur' => 'required|numeric',
            'bio'  => 'required',
        ]);

        $cast->update($validatedData);
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        $cast->delete();
        return redirect('/cast');
    }
}
