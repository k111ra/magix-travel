<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Reseaux;
use App\Models\Destination;
use App\Models\Information;
use App\Models\TypeTour;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
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
        return view('admin.tours.index')->with([
            'tours'=> $tours
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        $types = TypeTour::all();
        return view('admin.tours.create', compact('destinations','types'));
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
            'type_tours_id' => ['required', 'integer'],
            'duree' => ['required', 'numeric'],
            'prix' => ['required', 'numeric'],
            'place' => ['required', 'numeric'],
            'date_depart' => ['required', 'date'],
            'moyen_transport' => ['required', 'string'],
            'description' => ['required', 'string', 'max:255'],
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
        $tour->type_tours_id = $validatedData['type_tours_id'];
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

        // dd($tour);
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
        $destination = Destination::orderBy('created_at', 'desc')->get();
        $types = TypeTour::orderBy('created_at', 'desc')->get();
        return view('admin.tours.edit', compact('tour', 'destination','types'));
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
            'type_tours_id' =>'required',
            'duree' => 'required',
            'prix' => 'required',
            'place' => 'required',
            'status' => 'required',
            'date_depart' => 'required',
            'moyen_transport' => 'required',
            'description' => 'string',
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
            'type_tours_id' => $validatedData['type_tours_id'],
            'duree' => $validatedData['duree'],
            'prix' => $validatedData['prix'],
            'place' => $validatedData['place'],
            'status' => $validatedData['status'],
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


    public function tourFrontend()
    {
        $tours = Tour::paginate(10);
        $destinations  = Destination::all();
        $information = Information::first();
        $types = TypeTour::all();
        $reseau = Reseaux::first();
        return view('frontend.pages.tours.index', compact('types','tours','destinations','information','reseau'));
    }

    public function tourDetails($id)
    {
        $tour = Tour::findOrFail($id);

    // Récupérer les autres tours de la même ville
        $relatedtours = Tour::where('destinations_id', $tour->destinations_id)
                    ->where('id', '!=', $tour->id) // Exclure le tour actuel
                    ->get();
        $information = Information::first();
        $reseau = Reseaux::first();
        return view('frontend.pages.tours.single-tour', compact('tour','relatedtours','reseau','information'));
    }

    public function search(Request $request){
        $destinations  = Destination::all();
        $query = $request->input('query');
        $tours = Tour::join('destinations', 'tours.destinations_id', '=', 'destinations.id')
                            ->where('destinations.name', 'LIKE', "%{$query}%")
                            ->Orwhere('tours.nom', 'LIKE', "%{$query}%")
                            ->select('tours.*') 
                            ->Paginate(10);
        $information = Information::first();
        $reseau = Reseaux::first();
        return view('frontend.pages.tours.search', compact('tours', 'query', 'destinations','information','reseau'));

    } 
}
