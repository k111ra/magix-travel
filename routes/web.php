<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DestinationController;
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

// Admin routes (use middleware for protection)
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    // Resource routes for common admin functionalities
    Route::resource('tours', ToursController::class);
    Route::resource('hotels', HotelsController::class);
    Route::resource('destinations', DestinationController::class);

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
    Route::get('/produit', [ProduitsController::class, 'index'])->name('produits.index');

    /////////Routes des devis////////
    Route::get('/devis', [DevisController::class, 'index'])->name('devis.index');


    /////////Routes des Tours////////
    Route::get('/tours', [ToursController::class, 'index'])->name('tours.index');
});


///////////Les routes de connexion et deconnexion
Route::post('/login.store', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [HomeController::class, 'login'])->name('login');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');


Route::get('/hotels', [HotelsController::class, 'hotelFrontend'])->name('hotels');

// Use Laravel helper functions for common authentication routes (optional)
Auth::routes();
