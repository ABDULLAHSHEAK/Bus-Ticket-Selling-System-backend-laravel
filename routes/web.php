<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'db_view'])->middleware(['auth', 'verified'])->name('profile');


// Route::get('/profile', function () {
//     return view('profile');
// })->middleware(['auth', 'verified'])->name('profile');

// ---------- Dashboard Routes -----------
Route::middleware('auth')->group(function () {

    // ================ User Route =============
    Route::get('/add-user', [UserController::class, 'add_user'])->name('add.user');
    Route::post('/add-user', [UserController::class, 'store_user'])->name('store.user');
    Route::get('/show-user', [UserController::class, 'show_user'])->name('show.user');
    Route::get('/edit-user/{id}', [UserController::class, 'edit_user'])->name('edit.user');
    Route::post('/edit-user/{id}', [UserController::class, 'update_user'])->name('update.user');
    Route::get('/show-user/{id}', [UserController::class, 'delete_user'])->name('delete.user');

    // ================ Location Route =============
    Route::get('/add-location', [LocationController::class, 'location'])->name('add.location');
    Route::post('/add-location', [LocationController::class, 'store_location'])->name('store.location');
    Route::get('/show-location', [LocationController::class, 'show_location'])->name('show.location');
    Route::get('/edit-location/{id}', [LocationController::class, 'edit_location'])->name('edit.location');
    Route::post('/edit-location/{id}', [LocationController::class, 'update_location'])->name('update.location');
    Route::get('/show-location/{id}', [LocationController::class, 'delete_location'])->name('delete.location');

    // ================= Bus Route ==============
    Route::get('/add-bus',[BusController::class,'add_bus'])->name('add.bus');
    Route::post('/add-bus',[BusController::class,'store_bus'])->name('store.bus');
    Route::get('/show-bus',[BusController::class,'show_bus'])->name('show.bus');
    Route::get('/edit-bus/{id}',[BusController::class,'edit_bus'])->name('edit.bus');
    Route::post('/edit-bus/{id}',[BusController::class,'update_bus'])->name('update.bus');
    Route::get('/show-bus/{id}',[BusController::class,'delete_bus'])->name('delete.bus');

    // ========= Trip Route ==========
    Route::get('/add-trip', [TripController::class, 'add_trip'])->name('add.trip');
    Route::post('/add-trip', [TripController::class, 'store_trip'])->name('store.trip');
    Route::get('/show-trip', [TripController::class, 'show_trip'])->name('show.trip');
    Route::get('/edit-trip/{id}', [TripController::class, 'edit_trip'])->name('edit.trip');
    Route::post('/edit-trip/{id}', [TripController::class, 'update_trip'])->name('update.trip');
    Route::get('/show-trip/{id}', [TripController::class, 'delete_trip'])->name('delete.trip');


    // ========= Fares Route ==========
    Route::get('/add-fare', [FareController::class, 'add_fare'])->name('add.fare');
    Route::post('/add-fare', [FareController::class, 'store_fare'])->name('store.fare');
    Route::get('/show-fare', [FareController::class, 'show_fare'])->name('show.fare');
    Route::get('/edit-fare/{id}', [FareController::class, 'edit_fare'])->name('edit.fare');
    Route::post('/edit-fare/{id}', [FareController::class, 'update_fare'])->name('update.fare');
    Route::get('/show-fare/{id}', [FareController::class, 'delete_fare'])->name('delete.fare');


    // ========= Seat Route ==========
    Route::get('/show-seat', [SeatController::class, 'show_seat'])->name('show.seat');
    Route::get('/seat-details/{id}', [SeatController::class, 'seat_details'])->name('seat.details');


    Route::get('/add-fare', [FareController::class, 'add_fare'])->name('add.fare');
    Route::post('/add-fare', [FareController::class, 'store_fare'])->name('store.fare');
    Route::get('/edit-fare/{id}', [FareController::class, 'edit_fare'])->name('edit.fare');
    Route::post('/edit-fare/{id}', [FareController::class, 'update_fare'])->name('update.fare');
    Route::get('/show-fare/{id}', [FareController::class, 'delete_fare'])->name('delete.fare');

});











Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [DashboardController::class, 'admin_logout'])->name('admin_logout');
});

require __DIR__ . '/auth.php';
