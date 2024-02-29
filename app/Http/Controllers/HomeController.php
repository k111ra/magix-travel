<?php

namespace App\Http\Controllers;

use App\Models\Tour;
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
        $tours = Tour::all(); // Retrieve all tours from the database

        return view('index', compact('tours')); // Assuming 'front.home' is your view file
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
        return view('admin.index');

    }

    public function login()
    {

        return view('auth.login');
    }

}

