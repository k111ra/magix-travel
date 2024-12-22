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
        $tours = Tour::where('status', 'activé')->orderBy('id', 'desc')->get();
        $destinations = Destination::where('status', 'activé')->orderBy('id', 'desc')->get();
        $hotels = Hotel::where('status', 'activé')->orderBy('id', 'desc')->get();
        $vols = Vol::all();
        $pays = AirPort::all();

        $type = TypeReservation::all();
        $sliders = Slider::where('status', 'activé')->orderBy('id', 'desc')->get();
        $information = Information::first();
        $reseau = Reseaux::first();
        // dd($pays);
        return view('home', compact('type', 'tours', 'destinations', 'hotels', 'vols', 'pays', 'sliders', 'information', 'reseau'));
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
        return view('frontend.pages.Apropos.index', compact('information', 'reseau'));
    }

    /**
     * Affiche la page de contact.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contacts()
    {
        $information = Information::first();
        $reseau = Reseaux::first();
        return view('frontend.pages.Contact.index', compact('information', 'reseau'));
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
        return view('frontend.pages.service.index', compact('information', 'reseau'));
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

        $reservationvols = Reservation::whereHas('typeReservation', function ($query) {
            $query->whereIn('nom', ['Vol Simple', 'Vol Aller-Retour']);
        })->orderBy('id', 'desc')->count();

        $reservationhotels = Reservation::whereHas('typeReservation', function ($query) {
            $query->whereIn('nom', ['Hotel']);
        })->orderBy('id', 'desc')->count();

        $reservationtours = Reservation::whereHas('typeReservation', function ($query) {
            $query->whereIn('nom', ['Tour']);
        })->orderBy('id', 'desc')->count();

        //les status
        $reservationsEnCoursHotels = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', 'Hotel');
        })->where('status', 'traiter')->count();

        $reservationsValideesHotels = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', 'Hotel');
        })->where('status', 'valider')->count();

        $reservationsAnnuleesHotels = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', 'Hotel');
        })->where('status', 'annuler')->count();

        //les status
        $reservationsEnCoursTours = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', 'Tour');
        })->where('status', 'traiter')->count();

        $reservationsValideesTours = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', 'Tour');
        })->where('status', 'valider')->count();

        $reservationsAnnuleesTours = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', 'Tour');
        })->where('status', 'annuler')->count();

        //les status
        $reservationsEnCoursVols = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', ['Vol Simple', 'Vol Aller-Retour']);
        })->where('status', 'traiter')->count();

        $reservationsValideesVols = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', ['Vol Simple', 'Vol Aller-Retour']);
        })->where('status', 'valider')->count();

        $reservationsAnnuleesVols = Reservation::whereHas('typeReservation', function ($query) {
            $query->where('nom', ['Vol Simple', 'Vol Aller-Retour']);
        })->where('status', 'annuler')->count();

        return view('admin.dashboard.index', [

            'totalTours' => $totalTours,
            'percentageIncrease' => $percentageIncrease,
            'totalHotels' => $totalHotels,
            'percentageIncreaseHotels' => $percentageIncreaseHotels,
            'totalDestinations' => $totalDestinations,
            'percentageIncreaseDestinations' => $percentageIncreaseDestinations,
            'totalReservations' => $totalReservations,
            'percentageIncreaseReservations' => $percentageIncreaseReservations,
            'reservationvols' => $reservationvols,
            'reservationsEnCoursVols' => $reservationsEnCoursVols,
            'reservationsValideesVols' => $reservationsValideesVols,
            'reservationsAnnuleesVols' => $reservationsAnnuleesVols,

            'reservationtours' => $reservationtours,
            'reservationsEnCoursTours' => $reservationsEnCoursTours,
            'reservationsValideesTours' => $reservationsValideesTours,
            'reservationsAnnuleesTours' => $reservationsAnnuleesTours,

            'reservationhotels' => $reservationhotels,
            'reservationsEnCoursHotels' => $reservationsEnCoursHotels,
            'reservationsValideesHotels' => $reservationsValideesHotels,
            'reservationsAnnuleesHotels' => $reservationsAnnuleesHotels,
        ]);
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
