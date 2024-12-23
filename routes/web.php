<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelReservationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TourReservationController;
use App\Http\Controllers\TypeReservationController;
use App\Http\Controllers\TypeTourController;
use App\Http\Controllers\VolController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authentication routes
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/deconnexion', [LogoutController::class, 'deconnexion'])->name('deconnexion');

// Public routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

//routes des destinations
Route::get('/destination', [DestinationController::class, 'destination'])->name('destination');
Route::get('/detail-destination/{id}', [DestinationController::class, 'singleDestination'])->name('single-destination');



//Routes des hotels
Route::get('/hotel-details/{id}', [HotelsController::class, 'hotelDetails'])->name('single-hotel');
Route::get('/recherche-hotel', [HotelsController::class, 'search'])->name('hotel.search');

//Route de recherche des vols
Route::get('/reservation-vols', [VolController::class, 'reservation'])->name('reservation-vols');



//hotel reservation
Route::get('/hotel-reservation/{id}', [HotelReservationController::class, 'index'])->name('single-reservation');
Route::get('/hotel-reservationShow/{id}', [HotelReservationController::class, 'show'])->name('single-reservationshow');
Route::post('/hotel-reservation-create', [HotelReservationController::class, 'create'])->name('create-reservation');


//reservation d'hotel
Route::post('/reservations-hotels', [ReservationController::class, 'reserverHotel'])->name('hotels.reservationHotel');


//reservation d'hotel
Route::post('/reservations-tours', [ReservationController::class, 'reservertour'])->name('hotels.reservation.tour');


Route::post('/vol-reservation-step1', [ReservationController::class, 'insertReservationStep1Vols'])->name('step1.reservation.store');
Route::post('/vol-reservation-step2', [ReservationController::class, 'insertReservationStep2Vols'])->name('step2.reservation.store');

//reservation d'un vol aller-retour
Route::post('/vol-reservation-step1-aller-retour', [ReservationController::class, 'insertReservationStep1VolsAllerRetour'])->name('step1.reservation.aller.retour.store');


Route::post('/annuler-reservation-vols/{id}', [ReservationController::class, 'annulerReservation'])->name('annuler.reservation.vols');
Route::post('/traitement-reservation-vols/{id}', [ReservationController::class, 'traitementReservation'])->name('traitement.reservation.vols');
Route::post('/valider-reservation-vols/{id}', [ReservationController::class, 'validerReservation'])->name('valider.reservation.vols');
Route::post('/restaurer-reservation-vols/{id}', [ReservationController::class, 'restaurerReservation'])->name('restaurer.reservation.vols');
// Admin routes (use middleware for protection)
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    //////////////// routes des permissions
    Route::get('/liste-permission', [PermissionController::class, 'index'])->name('index.permission');
    Route::get('/create-permission', [PermissionController::class, 'create'])->name('create.permission');
    Route::post('/store-permission', [PermissionController::class, 'store'])->name('store.permission');
    Route::get('/edit-permission/{id}', [PermissionController::class, 'edit'])->name('edit.permission');
    Route::post('/update-permission/{id}', [PermissionController::class, 'update'])->name('update.permission');
    Route::delete('/destroy-permission/{permission}', [PermissionController::class, 'destroy'])->name('destroy.permission');
 
    //////////////// routes des roles
    Route::get('/liste-role', [RoleController::class, 'index'])->name('index.role');
    Route::get('/create-role', [RoleController::class, 'create'])->name('create.role');
    Route::post('/store-role', [RoleController::class, 'store'])->name('store.role');
    Route::get('/edit-role/{id}', [RoleController::class, 'edit'])->name('edit.role');
    Route::get('/show-role/{id}', [RoleController::class, 'show'])->name('show.role');
    Route::post('/update-role/{id}', [RoleController::class, 'update'])->name('update.role');
    Route::delete('/destroy-role/{role}', [RoleController::class, 'destroy'])->name('destroy.role');
    Route::post('/roles/{id}/permissions', [RoleController::class, 'assignPermissionsToRole'])->name('role.assignPermissions');

    Route::get('/liste-reservations-hotels', [ReservationController::class, 'reservationHotels'])->name('reservations.hotels.reservationHotels');
    Route::get('/liste-reservations-tours', [ReservationController::class, 'reservationTours'])->name('reservations.tours.reservationTours');
    Route::get('/liste-reservation-vols', [ReservationController::class, 'reservationVols'])->name('reservation.vols.reservationVols');
    Route::get('/vol/{id}', [ReservationController::class, 'showVol'])->name('reservation.vols.show');
    Route::get('/hotel/{id}', [ReservationController::class, 'showHotel'])->name('reservation.hotel.show');
    Route::get('/tour/{id}', [ReservationController::class, 'showtour'])->name('reservation.tour.show');

     //////////////// routes de type de programme
     Route::get('/liste-type-reservation', [TypeReservationController::class, 'index'])->name('type.index');
     Route::get('/create-type-reservation', [TypeReservationController::class, 'create'])->name('type.create');
     Route::post('/store-type-reservation', [TypeReservationController::class, 'store'])->name('type.store');
     Route::get('/edit-type-reservation/{id}', [TypeReservationController::class, 'edit'])->name('type.edit');
     Route::post('/update-type-reservation/{id}', [TypeReservationController::class, 'update'])->name('type.update');
     Route::delete('/destroy-type-reservation/{type}', [TypeReservationController::class, 'destroy'])->name('type.destroy');

     //////////////// routes des enfants
     Route::get('/liste-slider', [SliderController::class, 'index'])->name('slider.index');
     Route::get('/create-slider', [SliderController::class, 'create'])->name('slider.create');
     Route::post('/store-slider', [SliderController::class, 'store'])->name('slider.store');
     Route::get('/edit-slider/{id}', [SliderController::class, 'edit'])->name('slider.edit');
     Route::post('/update-slider/{id}', [SliderController::class, 'update'])->name('slider.update');
     Route::delete('/destroy-slider/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');

     //////////////// routes des enfants
     Route::get('/liste-type-tour', [TypeTourController::class, 'index'])->name('type.tour.index');
     Route::get('/create-ype-tour', [TypeTourController::class, 'create'])->name('type.tour.create');
     Route::post('/store-ype-tour', [TypeTourController::class, 'store'])->name('type.tour.store');
     Route::get('/edit-ype-tour/{id}', [TypeTourController::class, 'edit'])->name('type.tour.edit');
     Route::post('/update-ype-tour/{id}', [TypeTourController::class, 'update'])->name('type.tour.update');
     Route::delete('/destroy-ype-tour/{type}', [TypeTourController::class, 'destroy'])->name('type.tour.destroy');

    // Resource routes for common admin functionalities
    Route::resource('tours', ToursController::class);
    Route::resource('hotels', HotelsController::class);
    Route::resource('destinations', DestinationController::class);
    Route::resource('vols', VolController::class);
    Route::resource('reservations', ReservationController::class);



    // Other admin routes
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // User management routes
    Route::resource('users', UsersController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('roles', RolesController::class);

    // Other functionalities with separate controllers
    Route::resource('commandes', CommandesController::class);
    Route::resource('produits', ProduitsController::class);
    Route::resource('devis', DevisController::class);

    ////////////Routes des utilisateurs////////////
    Route::get('/liste-user', [UsersController::class, 'index'])->name('user.index');
    Route::get('/create-user', [UsersController::class, 'create'])->name('user.create');

    ////////////Routes des clients////////////
    Route::get('/liste-client', [ClientController::class, 'index'])->name('client.index');
    Route::get('/create-client', [ClientController::class, 'create'])->name('client.create');

    ///////////////Routes des Rôles////////////////////
    Route::get('/roles', [RolesController::class, 'index'])->name('Roles.index');


    ////////////Routes des commandes///////////
    Route::get('/commandes', [CommandesController::class, 'index'])->name('commandes.index');

    /////////Routes des produits//////////
    // Route::get('/produit', [ProduitsController::class, 'index'])->name('produits.index');

    /////////Routes des devis////////
    // Route::get('/devis', [DevisController::class, 'index'])->name('devis.index');


    /////////Routes des Tours////////
    Route::get('/tours', [ToursController::class, 'index'])->name('tours.index');

    
    ///Routes de message
    Route::get('/message', [MessageController::class, 'index'])->name('message');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('message-vue');
    Route::patch('/messages/{message}', [MessageController::class, 'update']);

    //Route for parametre 
    Route::get('/parametre/generaux',[ParametreController::class,'create'])->name('create-info');
    Route::post('/parametre/store',[ParametreController::class,'store'])->name('store-info');
    Route::post('/parametre/reseaux',[ParametreController::class,'reseaux'])->name('reseaux-info');

});


///////////Les routes de connexion et deconnexion
Route::post('/login.store', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [HomeController::class, 'login'])->name('login');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');


////////////Les routes front de hotel////////////////////////
Route::get('/hotels', [HotelsController::class, 'hotelFrontend'])->name('hotels');

////////////Les routes front de tour////////////////////////
Route::get('/Reservation-tour/{id}', [TourReservationController::class, 'index'])->name('Reservation.tour');
Route::get('/Show-tour_resevation/{id}', [TourReservationController::class, 'show'])->name('Reservation.tourShow');
Route::get('/tours', [ToursController::class, 'tourFrontend'])->name('tours');
Route::get('/recherche', [ToursController::class, 'search'])->name('tour.search');
Route::post('/tour-reservation-create', [TourReservationController::class, 'create'])->name('reservation.tour.create');
Route::get('/detail-tour/{id}', [ToursController::class, 'tourDetails'])->name('single-tour');


////////////Les routes front pour about////////////////////////
Route::get('/a-propos-de-nous', [AboutController::class, 'index'])->name('about');
// Route::get('/test', [AboutController::class, 'test'])->name('about');


////////////Les routes front de contact////////////////////////
Route::get('/contactez-nous', [ContactController::class, 'index'])->name('contact');
Route::post('/contactez-nous', [MessageController::class, 'restore'])->name('envoi-message');



////////////Les routes front de contact////////////////////////
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Routes de Newsletter
Route::post('/newsletter', [NewsletterController::class, 'subscribe']);

Route::get('/alerte', [DevisController::class, 'index'])->name('alert.index');



// Use Laravel helper functions for common authentication routes (optional)
Auth::routes();
