<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Tour;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    //////////////////RECHECHE DES TOURS ////////////////////
    public function rechercheTour(Request $request){

        if ($request->filled('rechercheTour')) {
            $recherchet = $request->rechercheTour;
            $tours = Tour::where('destination', 'LIKE', "%$recherchet%")
            ->orWhere('date_depart', 'LIKE', "%$recherchet%")
            ->orWhere('moyen_transport', 'LIKE', "%$recherchet%")
            ->orWhere('prix', 'LIKE', "%$recherchet%")
            ->get();
        } else{
            $tours = Tour::all();
        }
        // dd($recherche);
       return view('frontend.pages.recherche.tours.index', compact('tours'));
     }


     
    //////////////////RECHERCHE DES HOTELS///////////////
    
    public function rechercheHotel(Request $request) {
        if ($request->filled('rechercheHotel')) {
            $recherche = $request->rechercheHotel;
    
            $hotels = Hotel::where('name', 'LIKE', "%$recherche%")
                ->orWhere('description', 'LIKE', "%$recherche%")
                ->orWhere('localisation', 'LIKE', "%$recherche%")
                ->orWhere('prix', 'LIKE', "%$recherche%")
                ->get();
        } else {
            $hotels = Hotel::all();
        }
    
        return view('frontend.pages.recherche.hotels.index', compact('hotels'));
    }


}
