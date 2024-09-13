<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::orderby("created_at", 'DESC')->get();
        return view('admin.hotels.index')->with('hotels', $hotels);
    }

    public function create()
    {
        $destinations = Destination::all();
        return view('admin.hotels.create', compact('destinations'));
    }

    public function store(Request $request)
    {
        // Validate the request

        // Create a new hotel
        $hotel = new Hotel([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'localisation' => $request->input('localisation'),
            'destinations_id' => $request->input('destinations_id'),
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
        $destinations = Destination::all();
        return view('admin.hotels.edit', compact('hotel', 'destinations'));
    }


    public function update(Request $request, Hotel $hotel)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'localisation' => 'required|string',
            'destinations_id' => 'required|string',
            'etoiles' => 'required|string',
            'prix' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Stocker les chemins des nouvelles images
        if ($request->hasFile('images')) {
            $images = [];

            foreach ($request->file('images') as $image) {
                $path = $image->store('hotels', 'public');
                $images[] = $path;
            }

            // Convertir le tableau d'images en une chaîne JSON valide
            $hotel->images = json_encode($images);
        }

        // Mettre à jour les autres champs avec les données validées
        $hotel->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'localisation' => $validatedData['localisation'],
            'destinations_id' => $validatedData['destinations_id'],
            'etoiles' => $validatedData['etoiles'],
            'prix' => $validatedData['prix'],
        ]);

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



    public function hotelFrontend()
    {
        $hotels = Hotel::Paginate(10);
        return view('frontend.pages.hotels.hotels', compact('hotels'));
    }

    public function hotelDetails($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('frontend.pages.hotels.hotel-details',compact('hotel'));
    }

    public function search(Request $request){
        $destinations  = Destination::all();
        $query = $request->input('query');
        $hotels = Hotel::join('destinations', 'hotels.destinations_id', '=', 'destinations.id')
                            ->where('destinations.name', 'LIKE', "%{$query}%")
                            ->Orwhere('localisation', 'LIKE', "%{$query}%")
                            ->Orwhere('hotels.name', 'LIKE', "%{$query}%")
                            ->select('hotels.*') 
                            ->paginate(10);
        return view('frontend.pages.hotels.search', compact('hotels', 'query', 'destinations'));

    } 
    }

