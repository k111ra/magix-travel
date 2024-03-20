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

        // Storing tour images
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('hotels', 'public'); // Store images in 'public/tour_images' directory
                $images[] = $path;
            }
            $hotel->images = $images;
        }

        // Save the hotel
        $hotel->save();

        // Redirect to the index page or show the created hotel
        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully');
    }

    public function show(Hotel $hotel)
    {
        return view('admin.hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        return view('admin.hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        // Validate the request

        // Update the hotel
        $hotel->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'localisation' => $request->input('localisation'),
            'etoiles' => $request->input('etoiles'),
            'prix' => $request->input('prix'),
            'images*' => $request->input('images[]'),
        ]);

        // Redirect to the index page or show the updated hotel
        Alert::toast(__('Hotel Modifier'), 'success');

        return redirect()->back();

    }

    public function destroy(Hotel $hotel)
    {
        // Delete the hotel
        $hotel->delete();

        // Redirect to the index page
        return redirect()->back()->with('success', 'Hotel deleted successfully');
    }
}
