<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DestinationController extends Controller
{
    /**
     * Affiche une liste des destinations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::orderby('created_at', 'DESC')->get();
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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Ajoutez d'autres règles de validation selon votre schéma
        ]);

        // Créez une nouvelle destination avec les données validées et les chemins d'accès aux images
        $destination = Destination::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'slug' => Str::slug($validatedData['name'], '-')
        ]);

        // Storing tour images
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('destination', 'public');
                $images[] = $path;
            }
            $destination->images = $images;
        }

        $destination->save();

        // Redirigez vers la page de détails de la destination créée
        return redirect()->route('destinations.index')->with('success', 'Destination ajoute avec succès');
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
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'slug' => 'string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Stocker les chemins des nouvelles images
        if ($request->hasFile('images')) {
            $images = [];

            foreach ($request->file('images') as $image) {
                $path = $image->store('destination', 'public');
                $images[] = $path;
            }

            // Convertir le tableau d'images en une chaîne JSON valide
            $destination->images = json_encode($images);
        }

        // Mettre à jour les autres champs avec les données validées
        $destination->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'slug' => Str::slug($validatedData['name'], '-')
        ]);

        // Redirect to the index page or show the updated hotel
        return redirect()->route('destinations.index')->with('success', 'Destination Modifié');
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

    public function destination(){
        $destinations = Destination::orderby('created_at', 'DESC')->get();
        return view('frontend.pages.destination.index',compact('destinations'));
    }

    public function singleDestination($id)
    {
        $destination = Destination::findOrFail($id);
        return view('frontend.pages.destination.single-destination', compact('destination'));
    }
}
