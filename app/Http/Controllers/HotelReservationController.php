<?php

namespace App\Http\Controllers;

use id;
use App\Models\Hotel;
use App\Models\Destination;
use App\Models\Reservation;
use Illuminate\Http\Request;

class HotelReservationController extends Controller
{
    //
    public function index($id){
        $hotel = Hotel::find($id);
        $destinations = Destination::all();
        return view('frontend.pages.hotels.reservation',compact('hotel','destinations'));
    }

    

    public function show($id){
        $reservation = Reservation::findOrFail($id);
        return view('frontend.pages.hotels.reservationShow',compact('reservation'));
    }

     
    public function create(Request $request){
        // Valider les données du formulaire
        $request->validate([
            // 'client_id' => 'required|exists:users,id',
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

        // Créer une nouvelle réservation
        $reservation = new Reservation();
        // $reservation->client_id = $request->input('client_id');
        $reservation->first_name = $request->input('first_name');
        $reservation->last_name = $request->input('last_name');
        $reservation->phone_number = $request->input('phone_number');
        $reservation->email = $request->input('email');
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->amount = $request->input('amount');
        $reservation->num_persons = $request->input('num_persons');
        $reservation->tour_id = $request->input('tour_id');
        $reservation->hotel_id = $request->input('hotel_id');
        $reservation->vol_id = $request->input('vol_id');
        $reservation->save();

        // Rediriger avec un message de succès

        return redirect()->back()
            ->with('success', 'Reservation créée avec succès.');
    }

    
    
}
