<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    /**
     * Affiche une liste des destinations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * Affiche le formulaire pour créer une nouvelle destination.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Stocke une nouvelle destination dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Ajoutez d'autres règles de validation selon votre schéma
        ]);

        // Créez une nouvelle destination avec les données validées et le slug
        $destination = Destination::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'images' => $validatedData['images'],
            'slug' => Str::slug($validatedData['name'], '-')
        ]);

        // Redirigez vers la page de détails de la destination créée
        return redirect()->route('destinations.index', $destination);
    }

    /**
     * Affiche une destination spécifique.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('admin.destinations.show', compact('destination'));
    }

    /**
     * Affiche le formulaire pour éditer une destination spécifique.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    /**
     * Met à jour une destination spécifique dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $destination->update($request->all());
        return redirect()->route('admin.destinations.show', $destination);
    }

    /**
     * Supprime une destination spécifique de la base de données.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index');
    }
}
