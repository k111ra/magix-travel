<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        // dd($tours); // Check if data is retrieved successfully
        return view('admin.tours.index')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Validation rules for other fields
            'nom' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'prix' => 'required',
            'destination' => 'required',
            'place' => 'required',
            'date_depart' => 'required',
            'moyen_transport' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create the tour without the 'images' attribute
        $tour = Tour::create(Arr::except($validatedData, 'images'));

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('tour_images', 'public');
                $images[] = $path;
            }
            $tour->update(['images' => $images]);
        }


        return redirect()->route('tours.index')->with('success', 'Tour ajouté avec succès.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // app/Http/Controllers/TourController.php

    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Tour $tour)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'prix' => 'required',
            'destination' => 'required',
            'place' => 'required',
            'date_depart' => 'required',
            'moyen_transport' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('tour_images', 'public');
                $images[] = $path;
            }
            $tour->update(['images' => $images]);
        }


        $tour->update($validatedData);

        return redirect()->route('tours.index')->with('success', 'Tour mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // app/Http/Controllers/TourController.php

    public function destroy(Tour $tour)
    {
        $tour->delete();

        return redirect()->route('tours.index')->with('success', 'Tour supprimé avec succès.');
    }

}
