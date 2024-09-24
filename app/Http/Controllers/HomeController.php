<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vol;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\Slider;
use App\Models\AirPort;
use App\Models\Destination;
use App\Models\Information;
use App\Models\Reseaux;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\TypeReservation;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $tours = Tour::latest()->take(9)->get();
        $destinations = Destination::latest()->take(10)->get();
        $hotels = Hotel::latest()->take(6)->get();
        $vols = Vol::all();
        $pays = AirPort::all();
        $type = TypeReservation::all();
        $sliders = Slider::where('status', 'activé')->orderBy('id', 'desc')->get();
        $information = Information::first();
        $reseau = Reseaux::first();
        return view('home', compact('type','tours', 'destinations', 'hotels', 'vols', 'pays','sliders','information','reseau'));
    }

    /**
     * Affiche la page "A propos".
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function apropos()
    {
        $information = Information::first();
        $reseau = Reseaux::first();
        return view('frontend.pages.Apropos.index',compact('information','reseau'));
    }

    /**
     * Affiche la page de contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacts()
        { $information = Information::first();
            $reseau = Reseaux::first();
        return view('frontend.pages.Contact.index',compact('information','reseau'));
    }

    /**
     * Affiche la page de service.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function service()
    {
        $information = Information::first();
        $reseau = Reseaux::first();
        return view('frontend.pages.service.index',compact('information','reseau'));
    }

    /**
     * Affiche le tableau de bord administrateur.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $totalTours = Tour::count();
        $totalHotels = Hotel::count();
        $totalDestinations = Destination::count();
        $totalReservations = Reservation::count();

        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();

        $newTours = Tour::whereBetween('created_at', [$startDate, $endDate])->count();
        $percentageIncrease = $this->calculatePercentageIncrease($totalTours, $newTours);

        $newHotels = Hotel::whereBetween('created_at', [$startDate, $endDate])->count();
        $percentageIncreaseHotels = $this->calculatePercentageIncrease($totalHotels, $newHotels);

        $newDestinations = Destination::whereBetween('created_at', [$startDate, $endDate])->count();
        $percentageIncreaseDestinations = $this->calculatePercentageIncrease($totalDestinations, $newDestinations);

        $newReservations = Reservation::whereBetween('created_at', [$startDate, $endDate])->count();
        $percentageIncreaseReservations = $this->calculatePercentageIncrease($totalReservations, $newReservations);

        return view('admin.index', compact('totalTours', 'percentageIncrease', 'totalHotels', 'percentageIncreaseHotels', 'totalDestinations', 'percentageIncreaseDestinations', 'totalReservations', 'percentageIncreaseReservations'));
    }

    /**
     * Affiche la page de connexion.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Calcule le pourcentage d'augmentation.
     *
     * @param int $total
     * @param int $new
     * @return float|int
     */
    private function calculatePercentageIncrease($total, $new)
    {
        return $total > 0 ? (($new - $total) / $total) * 100 : 0;
    }
}
