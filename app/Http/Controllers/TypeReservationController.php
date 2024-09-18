<?php

namespace App\Http\Controllers;

use App\Models\TypeReservation;
use Illuminate\Http\Request;

class TypeReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeReservation::all();
        return view('admin.type-reservation.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type-reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new TypeReservation();
        $type->nom = $request->input('nom');
        $type->save();
        return redirect()->route('type.index')->with('success', "Le type de reservation a été ajouté avec succès.");
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
    public function edit($id)
    {
        $type = TypeReservation::findOrFail($id);
        if (!$type) {
            return redirect()->back()->with('error', "Le type reservation spécifié n'existe pas.");
        }
        return view('admin.type-reservation.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = TypeReservation::findOrFail($id);
        $type->nom = $request->input('nom');
        $type->save();
        return redirect()->route('type.index')->with('success', "Le type reservation a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeReservation $type)
    {
        $type->delete();
        return redirect()->route('type.index')->with('success', "Le type type a été supprimé avec succès");
    }
}
