<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\Destination;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\AlerteCommandes;
use App\Notifications\AlerteCommandesVol;
use App\Notifications\AlerteCommandesHotel;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer toutes les réservations
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        $tours = Tour::all();
        $hotels = Hotel::all();
        $vols = Vol::all();
        return view('admin.reservations.create', compact('destinations', 'tours', 'hotels', 'vols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Valider les données du formulaire
        $request->validate([
            // 'client_id' => 'required|exists:users,id',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'age_bebe' => 'nullable',
            'age_enfant' => 'nullable',
            'reservation_date' => 'required|date',
            'amount' => 'required|numeric',
            'num_persons' => 'required|integer',
            'tour_id' => 'nullable|exists:tours,id',
            'hotel_id' => 'nullable|exists:hotels,id',
            'vol_id' => 'nullable|exists:vols,id',
        ]);

        // Créer une nouvelle réservation
        $reservation = new Reservation();
        // $reservation->client_id = $request->input('client_id');
        $reservation->first_name = $request->input('first_name');
        $reservation->last_name = $request->input('last_name');
        $reservation->phone_number = $request->input('phone_number');
        $reservation->email = $request->input('email');
        $reservation->nombre_bebe = $request->input('nombre_bebe');
        $reservation->nombre_enfant = $request->input('nombre_enfant');
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->amount = $request->input('amount');
        $reservation->num_persons = $request->input('num_persons');
        $reservation->tour_id = $request->input('tour_id');
        $reservation->hotel_id = $request->input('hotel_id');
        $reservation->vol_id = $request->input('vol_id');
        $reservation->save();

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation créée avec succès.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Récupérer et afficher les détails d'une réservation spécifique
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours = Tour::all();
        $hotels = Hotel::all();
        $vols = Vol::all();
        // Afficher le formulaire d'édition de réservation avec les données actuelles
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservations.edit', compact('reservation', 'tours', 'hotels', 'vols'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Valider les données du formulaire
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'reservation_date' => 'required|date',
            'amount' => 'required|numeric',
            'num_persons' => 'required|integer',
            'tour_id' => 'nullable|exists:tours,id',
            'hotel_id' => 'nullable|exists:hotels,id',
            'vol_id' => 'nullable|exists:vols,id',
        ]);

        // Mettre à jour la réservation
        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation mise à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Supprimer une réservation
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation supprimée avec succès.');
    }

    public function reservationVols()
    {
        // $listesvols =Reservation::orderBy('id', 'desc')->get();
        $listesvols = Reservation::whereHas('typeReservation', function ($query) {
            $query->whereIn('nom', ['Vol Simple', 'Vol Aller-Retour']);
        })->orderBy('id', 'desc')->get();
        return view('admin.reservations.reservation-vol', compact('listesvols'));
    }
    
    public function showVol($id){
        $showvol = Reservation::findOrFail($id);
        return view('admin.reservations.show-vol', compact('showvol'));

    }


    //Vue tours
    public function reservationTours()
    {
        $listestours = Reservation::whereHas('typeReservation', function ($query) {
            $query->whereIn('nom', ['Tour']);
        })->orderBy('id', 'desc')->get();
        return view('admin.reservations.reservation-tour',compact('listestours'));
    }
    public function showtour($id){
        $showtour = Reservation::findOrFail($id);
        return view('admin.reservations.show-tour', compact('showtour'));

    }


 //Vue hotels 
    public function reservationHotels()
    {
        $listesHotels = Reservation::whereHas('typeReservation', function ($query) {
            $query->whereIn('nom', ['Hotel']);
        })->orderBy('id', 'desc')->get();
        return view('admin.reservations.reservation-hotel',compact('listesHotels'));
    }

    public function showHotel($id){
        $showHotel = Reservation::findOrFail($id);
        return view('admin.reservations.show-Hotel', compact('showHotel'));

    }

    public function insertReservationStep1Vols(Request $request)
    {

        // Valider les données
        $validatedData = $request->validate([
            'destination_depart' => 'required|string|max:255',
            'destination_final' => 'required|string|max:255',
            'date_depart' => 'string|max:255',
            'date_retour' => 'string|max:255',
            'nombre_bebe' => 'nullable|integer', // Validation pour un nombre entier
            'nombre_enfant' => 'nullable|integer', // Validation pour un nombre entier
            'nombre_adultes' => 'nullable|integer', // Validation pour un nombre entier
            // 'type_reservations_id' => 'required|integer',
            'ref_reservation' => 'string|max:255|nullable',
        ]);

        // Rechercher l'ID du type de réservation pour "Vol"
        $typeReservation = DB::table('type_reservations')->where('nom', 'Vol Simple')->first();
        if (!$typeReservation) {
            return redirect()->back()->withErrors(['error' => 'Le type de réservation "Vol" est introuvable.']);
        }

        // Stocker l'ID du type de réservation dans les données validées
        $validatedData['type_reservations_id'] = $typeReservation->id;

        // Calculer automatiquement le total des personnes
        $nombre_bebe = $validatedData['nombre_bebe'] ?? 0; // Si non défini, par défaut 0
        $nombre_enfant = $validatedData['nombre_enfant'] ?? 0; // Si non défini, par défaut 0
        $nombre_adultes = $validatedData['nombre_adultes'] ?? 0; // Si non défini, par défaut 0
        // Additionner les valeurs
        $validatedData['num_persons'] = $nombre_bebe + $nombre_enfant + $nombre_adultes;


        // Générer automatiquement le numéro de référence de réservation
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        $num_reservation = "RES";
        // Récupérer le dernier numéro de réservation
        $num_count = Reservation::ref_reser();
        // Construire le numéro de réservation
        $validatedData['ref_reservation'] = $num_reservation . $jour . $mois . $annee . '00' . $num_count->count;

        // Stocker les données dans la session
        session()->put('step1', $validatedData);

        // Rediriger vers la deuxième étape
        return redirect()->route('reservation-vols');
    }

    public function insertReservationStep1VolsAllerRetour(Request $request)
    {
        // Valider les données
        $validatedData = $request->validate([
            'destination_depart' => 'required|string|max:255',
            'destination_final' => 'required|string|max:255',
            'date_depart' => 'string|max:255',
            'date_retour' => 'string|max:255',
            'nombre_bebe' => 'nullable|integer', // Validation pour un nombre entier
            'nombre_enfant' => 'nullable|integer', // Validation pour un nombre entier
            'nombre_adultes' => 'nullable|integer', // Validation pour un nombre entier
            'ref_reservation' => 'string|max:255|nullable',
        ]);

        // Rechercher l'ID du type de réservation pour "Vol"
        $typeReservation = DB::table('type_reservations')->where('nom', 'Vol Aller-Retour')->first();
        if (!$typeReservation) {
            return redirect()->back()->withErrors(['error' => 'Le type de réservation "Vol" est introuvable.']);
        }

        // Stocker l'ID du type de réservation dans les données validées
        $validatedData['type_reservations_id'] = $typeReservation->id;

        // Calculer automatiquement le total des personnes
        $nombre_bebe = $validatedData['nombre_bebe'] ?? 0; // Si non défini, par défaut 0
        $nombre_enfant = $validatedData['nombre_enfant'] ?? 0; // Si non défini, par défaut 0
        $nombre_adultes = $validatedData['nombre_adultes'] ?? 0; // Si non défini, par défaut 0
        // Additionner les valeurs
        $validatedData['num_persons'] = $nombre_bebe + $nombre_enfant + $nombre_adultes;


        // Générer automatiquement le numéro de référence de réservation
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        $num_reservation = "RES";
        // Récupérer le dernier numéro de réservation
        $num_count = Reservation::ref_reser();
        // Construire le numéro de réservation
        $validatedData['ref_reservation'] = $num_reservation . $jour . $mois . $annee . '00' . $num_count->count;

        // Stocker les données dans la session
        session()->put('step1', $validatedData);

        // Rediriger vers la deuxième étape
        return redirect()->route('reservation-vols');
    }

    public function insertReservationStep2Vols(Request $request)
    {
        // Valider les données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'email' => 'string|email|max:255',
            'contact' => 'string|max:255',
            'numero_whatsapp' => 'string|max:255',
            'adresse' => 'string|max:255',
        ]);


        // Récupérer les données de la session de la première étape
        $step1Data = session()->get('step1');

        // Fusionner les données de toutes les étapes
        $finalData = array_merge($step1Data, $validatedData);

        //Envoie de notification de reservation d'hôtel
        // Sauvegarder les données dans la base de données
      $reservation =  Reservation::create($finalData);

       // Email du client saisi lors de la réservation
       $customerEmail = $reservation->email;
       
       // Email du responsable (fixe)
       $adminEmail = env('MAIL_FROM_ADDRESS');
        // dd($adminEmail);
       // Envoi de l'email de confirmation au client
        Notification::route('mail', $customerEmail)
           ->notify(new AlerteCommandesVol($finalData, 'customer'));
       
           // Envoi de l'email au responsable du site
        Notification::route('mail', $adminEmail)
           ->notify(new AlerteCommandesVol($finalData, 'admin'));
           
        // Vider la session après l'enregistrement
        session()->forget('step1');

        // Rediriger vers une page de confirmation
        return redirect()->route('home')->with('success', 'Votre Reservation a bien été envoyée avec succès.');
    }

    public function traitementReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        // Mettre à jour le statut de la reservation
        $reservation->status = 'traiter';
        $reservation->date_debut_traitement = now();
        $reservation->save();
        return back()->with('success', 'Cette reservation marquée comme en traitement.');
    }

    public function validerReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        // Mettre à jour le statut de la reservation
        $reservation->status = 'valider';
        $reservation->date_valider = now();
        $reservation->date_fin_traitement = now();
        $reservation->save();
        return back()->with('success', 'Cette reservation marquée comme validé.');
    }

    public function annulerReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        // Mettre à jour le statut de la reservation
        $reservation->status = 'annuler';
        $reservation->date_annuler = now();
        $reservation->date_debut_traitement = null;
        $reservation->date_valider = null;
        $reservation->date_fin_traitement = null;
        $reservation->save();
        return back()->with('success', 'Cette reservation a été annullée avec succès.');
    }

    public function restaurerReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        // Mettre à jour le statut de la reservation
        $reservation->status = 'initialiser';
        $reservation->date_annuler = null;
        $reservation->date_debut_traitement = null;
        $reservation->date_valider = null;
        $reservation->date_fin_traitement = null;
        $reservation->save();
        return back()->with('success', 'Vous avez restaurer les status cette reservation');
    }

    public function reserverHotel(Request $request){
        // dd($request->all());
         $request->validate([
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'contact' => 'required',
            'email' => 'required|email',
            'date_depart' => 'string|max:255',
            'date_retour' => 'string|max:255',
            'nombre_enfant' => 'nullable|integer', // Validation pour un nombre entier
            'nombre_adultes' => 'nullable|integer', // Validation pour un nombre entier

        ]);

        // Générer automatiquement le numéro de référence de réservation
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        $num_reservation = "RES";
        $num_count = Reservation::ref_reser();// Récupérer le dernier numéro de réservation

         // Rechercher l'ID du type de réservation pour "Vol"
         $typeReservation = DB::table('type_reservations')->where('nom', 'Hotel')->first();
         if (!$typeReservation) {
             return redirect()->back()->withErrors(['error' => 'Le type de réservation "Vol" est introuvable.']);
         }

         // Stocker l'ID du type de réservation dans les données validées
         $validatedData['type_reservations_id'] = $typeReservation->id;

        $reservation = new Reservation();
        $reservation->type_reservations_id = $typeReservation->id;
        $reservation->nom = $request->input('nom');
        $reservation->prenoms = $request->input('prenoms');
        $reservation->contact = $request->input('contact');
        $reservation->email = $request->input('email');
        $reservation->nombre_enfant = $request->input('nombre_enfant');
        $reservation->nombre_adultes = $request->input('nombre_adultes');
        $reservation->date_depart = $request->input('date_depart');
        $reservation->date_retour = $request->input('date_retour');
        $reservation->hotel_id = $request->input('hotel_id');
        $reservation->nombre_enfant = $request->input('nombre_enfant') ?? 0;
        $reservation->nombre_adultes = $request->input('nombre_adultes') ?? 0;
        // Additionner les valeurs
        $reservation->num_persons =  $reservation->nombre_enfant + $reservation->nombre_adultes;
        $reservation->ref_reservation= $num_reservation . $jour . $mois . $annee . '00' . $num_count->count;

        //Envoie de notification de reservation d'hôtel
            // Email du client saisi lors de la réservation
            $customerEmail = $reservation->email;

            // Email du responsable (fixe)
            $adminEmail = env('MAIL_FROM_ADDRESS');

            // Envoi de l'email de confirmation au client
            Notification::route('mail', $customerEmail)
                ->notify(new AlerteCommandesHotel($reservation, 'customer'));

            // Envoi de l'email au responsable du site
            Notification::route('mail', $adminEmail)
                ->notify(new AlerteCommandesHotel($reservation, 'admin'));
        
        $reservation->save();
        return redirect()->back()->with('success', 'Votre Reservation a bien été envoyée avec succès.');

    }
    public function reservertour(Request $request){
        // dd($request->all());
         $request->validate([
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'contact' => 'required',
            'email' => 'required|email',
            'date_depart' => 'string|max:255',
            'date_retour' => 'string|max:255',
            'nombre_enfant' => 'nullable|integer', // Validation pour un nombre entier
            'nombre_adultes' => 'nullable|integer', // Validation pour un nombre entier

        ]);

        // Générer automatiquement le numéro de référence de réservation
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        $num_reservation = "RES";
        $num_count = Reservation::ref_reser();// Récupérer le dernier numéro de réservation

         // Rechercher l'ID du type de réservation pour "Vol"
         $typeReservation = DB::table('type_reservations')->where('nom', 'Tour')->first();
         if (!$typeReservation) {
             return redirect()->back()->withErrors(['error' => 'Le type de réservation "Vol" est introuvable.']);
         }

         // Stocker l'ID du type de réservation dans les données validées
         $validatedData['type_reservations_id'] = $typeReservation->id;

        $reservation = new Reservation();
        $reservation->type_reservations_id = $typeReservation->id;
        $reservation->nom = $request->input('nom');
        $reservation->prenoms = $request->input('prenoms');
        $reservation->contact = $request->input('contact');
        $reservation->email = $request->input('email');
        $reservation->nombre_enfant = $request->input('nombre_enfant');
        $reservation->nombre_adultes = $request->input('nombre_adultes');
        $reservation->date_depart = $request->input('date_depart');
        $reservation->date_retour = $request->input('date_retour');
        $reservation->tour_id = $request->input('tour_id');
        $reservation->nombre_enfant = $request->input('nombre_enfant') ?? 0;
        $reservation->nombre_adultes = $request->input('nombre_adultes') ?? 0;
        // Additionner les valeurs
        $reservation->num_persons =  $reservation->nombre_enfant + $reservation->nombre_adultes;
        $reservation->ref_reservation= $num_reservation . $jour . $mois . $annee . '00' . $num_count->count;
       
          //Envoie de notification de reservation de tour
          // Email du client saisi lors de la réservation
        $customerEmail = $reservation->email;

        // Email du responsable (fixe)
        $adminEmail = env('MAIL_FROM_ADDRESS');

        // Envoi de l'email de confirmation au client
        Notification::route('mail', $customerEmail)
            ->notify(new AlerteCommandes($reservation, 'customer'));

        // Envoi de l'email au responsable du site
        Notification::route('mail', $adminEmail)
            ->notify(new AlerteCommandes($reservation, 'admin'));
            // dd($reservation);
          // Rediriger avec un message de succès
        $reservation->save();
        return redirect()->back()->with('success', 'Votre Reservation a bien été envoyée avec succès.');

    }
}
