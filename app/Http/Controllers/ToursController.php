<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Yoeunes\Toastr\Facades\Toastr;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::orderby('created_at', 'DESC')->get();
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
        $destinations = Destination::all();
        return view('admin.tours.create',compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        // Définir les règles de validation
        $rules = [
            'nom' => ['required', 'string', 'max:255'],
            'destinations_id' => ['required', 'integer'],
            'duree' => ['required', 'numeric'],
            'prix' => ['required', 'numeric'],
            'place' => ['required', 'numeric'],
            'date_depart' => ['required', 'date'],
            'moyen_transport' => ['required', 'string'],
            'description'=> ['required', 'string', 'max:255'],
            'images' => 'array|required',
        ];

        // Valider les données
        $validatedData = $request->validate($rules);

        // Créer un nouveau tour
        $tour = new Tour;
        $tour->nom = $validatedData['nom'];
        $tour->description = $validatedData['description'];
        $tour->duree = $validatedData['duree'];
        $tour->prix = $validatedData['prix'];
        $tour->destinations_id = $validatedData['destinations_id'];
        $tour->place = $validatedData['place'];
        $tour->date_depart = $validatedData['date_depart'];
        $tour->moyen_transport = $validatedData['moyen_transport'];


        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('tour_images', 'public'); // Store images in 'public/tour_images' directory
                $images[] = $path;
            }
            // Convertir le tableau d'images en une chaîne de caractères JSON
            $tour->images = json_encode($images);
        }

        // Enregistrer le tour
        $tour->save();

        // Rediriger vers la page des tours
        return redirect()->route('tours.index')->with('success', 'Le tour a été ajouté avec succès');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        // dd($tour);
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
        $destinations = Destination::all();
        return view('admin.tours.edit', compact('tour','destinations'));
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
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'destinations_id' => 'required',
            'duree' => 'required',
            'prix' => 'required',
            'place' => 'required',
            'date_depart' => 'required',
            'moyen_transport' => 'required',
            'description'=> 'string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         // Stocker les chemins des nouvelles images
         if ($request->hasFile('images')) {
            $images = [];

            foreach ($request->file('images') as $image) {
                $path = $image->store('tour_images', 'public');
                $images[] = $path;
            }

            // Convertir le tableau d'images en une chaîne JSON valide
            $tour->images = json_encode($images);
        }

        // Mettre à jour les autres champs avec les données validées
        $tour->update([
            'nom' => $validatedData['nom'],
            'destinations_id' => $validatedData['destinations_id'],
            'duree' => $validatedData['duree'],
            'prix' => $validatedData['prix'],
            'place' => $validatedData['place'],
            'date_depart' => $validatedData['date_depart'],
            'moyen_transport' => $validatedData['moyen_transport'],
            'description' => $validatedData['description'],
        ]);
        // Notification Toastr de succès
        return redirect()->route('tours.index')->with('success', 'Le tour a été mis à jour avec succès');
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

        return redirect()->route('tours.index')->with('success', 'Le tour a été supprimé avec succès');
    }

}
