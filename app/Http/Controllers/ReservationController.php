<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Tour;
use App\Models\Vol;
use App\Notifications\AlerteCommandes;

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
        return view('admin.reservations.reservation-vol');
    }

    public function reservationTours()
    {
        return view('admin.reservations.reservation-tour');
    }

    public function reservationHotels()
    {
        return view('admin.reservations.reservation-hotel');
    }
}
