<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.index')->with('hotels', $hotels);
    }

    public function create()
    {
        return view('admin.hotels.create');
    }

    public function store(Request $request)
    {
        // Validate the request

        // Create a new hotel
        $hotel = new Hotel([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'localisation' => $request->input('localisation'),
            'etoiles' => $request->input('etoiles'),
            'prix' => $request->input('prix'),
            'images*' => $request->input('images[]'),
            // Add other fields as needed
        ]);

        // Storing hotel images
        if ($request->hasFile('images')) {
            $images = [];

            foreach ($request->file('images') as $image) {
                $path = $image->store('hotels', 'public');
                $images[] = $path;
            }

            // Convertir le tableau d'images en une chaîne JSON valide
            $hotel->images = json_encode($images);
        }

        // Enregistrer l'hôtel
        $hotel->save();



        // Redirect to the index page or show the created hotel
        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully');
    }

    public function show(Hotel $hotel)
    {
        return view('admin.hotels.show')->with('hotel', $hotel);
    }

    public function edit(Hotel $hotel)
    {
        return view('admin.hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'localisation' => 'required|string',
            'etoiles' => 'required|string',
            'prix' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update les champs autres que les images
        $hotel->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'localisation' => $validatedData['localisation'],
            'etoiles' => $validatedData['etoiles'],
            'prix' => $validatedData['prix'],
        ]);

        // Stocker les chemins des nouvelles images
        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('tour_images', 'public');
                $images[] = $path;
            }
        }

        // Mettre à jour les images seulement si de nouvelles images ont été téléchargées
        if (!empty ($images)) {
            $hotel->images = $images;
        }

        // Mettre à jour les autres champs avec les données validées
        $hotel->update($validatedData);

        // Redirect to the index page or show the updated hotel
        return redirect()->route('hotels.index')->with('success', 'Hotel Modifié');
    }


    public function destroy(Hotel $hotel)
    {
        // Delete the hotel
        $hotel->delete();

        // Redirect to the index page
        return redirect()->back()->with('success', 'Hotel deleted successfully');
    }
}
