<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use App\Models\Destination;
use Illuminate\Http\Request;

class VolController extends Controller
{
    public function index()
    {
        $vols = Vol::all();
        return view('admin.vols.index', compact('vols'));
    }

    public function create()
    {
        $destinations = Destination::all();
        return view('admin.vols.create', compact('destinations'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'compagnie_aerienne' => 'required|string|max:255',
            'depart_id' => 'required|exists:destinations,id',
            'destination_id' => 'required|exists:destinations,id',
            'date_depart' => 'required|date',
            'prix' => 'required|numeric',
        ]);

        $vol = Vol::create($validatedData);
        $vol->save();

        return redirect()->route('vols.index')->with('success', 'Vol ajouté avec succès.');
    }

    public function show(Vol $vol)
    {
        return view('admin.vols.show', compact('vol'));
    }

    public function edit(Vol $vol)
    {
        $destinations = Destination::all();
        return view('admin.vols.edit', compact('vol', 'destinations'));
    }

    public function update(Request $request, Vol $vol)
    {
        $validatedData = $request->validate([
            'compagnie_aerienne' => 'required|string|max:255',
            'depart_id' => 'required|exists:destinations,id',
            'destination_id' => 'required|exists:destinations,id',
            'date_depart' => 'required|date',
            'prix' => 'required|numeric',
        ]);

        $vol->update($validatedData);

        return redirect()->route('vols.index')->with('success', 'Vol mis à jour avec succès.');
    }

    public function destroy(Vol $vol)
    {
        $vol->delete();

        return redirect()->route('vols.index')->with('success', 'Vol supprimé avec succès.');
    }
}
