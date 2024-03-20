<?php

namespace App\Http\Controllers;

use App\Models\Vol;
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
        // Logique pour afficher le formulaire de création de vol
    }

    public function store(Request $request)
    {
        // Logique pour valider et enregistrer un nouveau vol
    }

    public function show(Vol $vol)
    {
        return view('vols.show', compact('vol'));
    }

    public function edit(Vol $vol)
    {
        // Logique pour afficher le formulaire d'édition de vol
    }

    public function update(Request $request, Vol $vol)
    {
        // Logique pour valider et mettre à jour le vol existant
    }

    public function destroy(Vol $vol)
    {
        // Logique pour supprimer un vol
    }
}
