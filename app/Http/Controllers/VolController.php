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


    public function search(Request $request)
    {
        
        $depart = $request->input('depart');
        $arrivee = $request->input('arrivee');
        
        // Rechercher les vols correspondants avec deux jointures pour départ et arrivée
        $vols = Vol::join('destinations as d1', 'vols.depart_id', '=', 'd1.id')  // pour le départ
                   ->join('destinations as d2', 'vols.destination_id', '=', 'd2.id')    // pour l'arrivée
                   ->where('d1.name', 'LIKE', "%{$depart}%") // destination de départ
                   ->where('d2.name', 'LIKE', "%{$arrivee}%") // destination d'arrivée
                   ->select('vols.*')
                   ->get();
        
        
            
        
        
          
        // Affichage des résultats
        return view('frontend.pages.vols.search', compact('vols'));
    }
}
