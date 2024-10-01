<?php

namespace App\Http\Controllers;

use App\Models\TypeTour;
use Illuminate\Http\Request;

class TypeTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeTour::orderBy('id', 'desc')->get();
        return view('admin.type-tour.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type-tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'string|max:255',
        ]);
    
        // Enregistrer le slider
        $type = new TypeTour();
        $type->nom = $request->input('nom');
        $type->save();
        return redirect()->route('type.tour.index')->with('success', 'Type tour ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $type = TypeTour::findOrFail($id);
        return view('admin.type-tour.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $type = TypeTour::findOrFail($id);
        $type->nom = $request->input('nom');
        $type->save();
        return redirect()->route('type.tour.index')->with('success', "Le type de tour a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeTour $type)
    {
        $type->delete();
        return redirect()->route('type.tour.index')->with('success', "Le type tour a été supprimé avec succès");
    }
}
