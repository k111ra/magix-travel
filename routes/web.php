<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

//////Les routes protegées sont utilisé côté admin du système 
Route::middleware(['auth'])->prefix('admin')->group(function(){
    
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/deconnexion', [LogoutController::class, 'deconnexion'])->name('deconnexion');
    
    ////////////Routes des utilisateurs////////////
    Route::get('/liste-user',[UsersController::class,'index'])->name('user.index');
    Route::get('/create-user',[UsersController::class,'create'])->name('user.create');

    ////////////Routes des clients////////////
    Route::get('/liste-client',[ClientController::class,'index'])->name('client.index');
    Route::get('/create-client',[ClientController::class,'create'])->name('client.create');

});


///////////Les routes de connexion et deconnexion
Route::post('/login.store', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [HomeController::class, 'login'])->name('login');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Auth::routes();
