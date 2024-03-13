<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|string|unique:destinations',
            // Ajoutez d'autres règles de validation selon votre schéma
        ]);


        // Enregistrez la destination dans la base de données
        $destination = new Destination($validatedData);

        // Gérez l'upload des images
        $uploadedImages = [];

        foreach ($request->file('images') as $image) {
            $path = $image->store('images', 'public');
            $uploadedImages[] = $path;
        }

        // Convertissez les images en tableau avant de les enregistrer
        $destination->images = $uploadedImages;

        // Associez les images à la destination dans la base de données
        $destination->save();

        // Utilisez SweetAlert pour afficher une alerte
        Alert::success('Succès', 'La destination a été créée avec succès.');

        // Redirigez vers la liste des destinations ou une autre page après la création
        return redirect()->route('destinations.index');
    }


    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinations.show', compact('destination'));
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id)
    {
        // Validez et mettez à jour les données du formulaire selon vos besoins
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        // Utilisez SweetAlert pour afficher une alerte
        Alert::success('Succès', 'La destination a été supprimée avec succès.');

        // Redirigez vers la liste des destinations ou une autre page après la suppression
        return redirect()->route('destinations.index');
    }
}
