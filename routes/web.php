<?php

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

Route::get('/dashboard/liste-user',[UsersController::class,'index'])->name('user.index');
Route::get('/dashboard/create-user',[UsersController::class,'create'])->name('user.create');


Route::get('/dashboard/liste-client',[ClientController::class,'index'])->name('client.index');
Route::get('/dashboard/create-client',[ClientController::class,'create'])->name('client.create');

Route::get('/', [HomeController::class, 'home'])->name('home');

Auth::routes();

Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [HomeController::class, 'login'])->name('login');


