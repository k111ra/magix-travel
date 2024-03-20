<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //  /*public function __construct()
    //  {
    //  $this->middleware('auth');
    //  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $tours = Tour::all(); 
        $destinations = Destination::orderby('created_at', 'DESC')->take(10)->get();
        $hotels = Hotel::orderby("created_at", 'DESC')->take(6)->get();
        return view('home', compact('tours','destinations','hotels')); // Assuming 'front.home' is your view file
    }

    public function destination(){
        $destinations = Destination::all();
        return view('frontend.destination.index',compact('destinations'));
    }

    public function apropos()
    {
        return view('frontend.pages.Apropos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        return view('frontend.pages.Contact.index');
        //
    }


    public function service()
    {
        return view('frontend.pages.service.index');
    }

    // public function dashboard(){

    //     return view('admin.index');
    // }

    public function dashboard()
    {
        // Get the total number of tours
        $totalTours = Tour::count();
        $totalHotels = Hotel::count();

        // Calculate the percentage increase (you may replace this logic with your own)
        $startDate = Carbon::now()->subDays(30); // Assuming you want the data for the last 30 days
        $endDate = Carbon::now();
        $newTours = Tour::whereBetween('created_at', [$startDate, $endDate])->count();
        $percentageIncrease = $totalTours > 0 ? (($newTours - $totalTours) / $totalTours) * 100 : 0;
        // Calculate the percentage increase (replace this logic with your own)
        $startDate = Carbon::now()->subDays(30); // Assuming you want the data for the last 30 days
        $endDate = Carbon::now();
        $newHotels = Hotel::whereBetween('created_at', [$startDate, $endDate])->count();
        $percentageIncreaseHotels = $totalHotels > 0 ? (($newHotels - $totalHotels) / $totalHotels) * 100 : 0;

        return view('admin.index', compact('totalTours', 'percentageIncrease', 'totalHotels', 'percentageIncreaseHotels'));
    }

    public function login()
    {

        return view('auth.login');
    }

}

