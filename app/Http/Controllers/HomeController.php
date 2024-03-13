<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tour;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $tours = Tour::all(); // Retrieve all tours from the database

        return view('home', compact('tours')); // Assuming 'front.home' is your view file
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


    //recherche
    ////////recherche function///////////
    public function recherche(Request $request){
        $data = $request->input('recherche');
        
       $tours = DB::table('tours')->where('destination', 'like', '%'. $data .'%')->get();
       return view('frontend.pages.recherche.tours.index', compact('tours'));
     }


}

