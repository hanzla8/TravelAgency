<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\Traveling\TravelingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth:web');


// Wese har route main travellimg ka folder call horaha hai. yaha hm ne group main kr ke is ko prefix krdia, or baqi jago se folder ko call krna close krdia
Route::group(['prefix' => 'traveling'], function(){

    Route::get('/about/{id}', [TravelingController::class, 'about'])->name('traveling.about');

    // Reservation Section
    Route::get('/reservation/{id}', [TravelingController::class, 'makeReservation'])->name('traveling.reservation');
    Route::post('/reservation/{id}', [TravelingController::class, 'storeReservation'])->name('traveling.reservation.store');

    // Deals
    Route::get('/deals', [TravelingController::class, 'deals'])->name('traveling.deals');
    Route::any('/search-deals', [TravelingController::class, 'searchDeals'])->name('traveling.deals.search');

});




// User Booking
Route::get('users/my-bookings', [UsersController::class, 'booking'])->name('users.bookings')->middleware('auth:web');




// Admin Pannel
Route::get('admin/login', [AdminsController::class, 'viewLogin'])->name('view.login')->middleware('check.for.auth');
Route::post('admin/login', [AdminsController::class, 'checkLogin'])->name('check.login');


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::get('/index', [AdminsController::class, 'index'])->name('admins.dashboard');

    // Admins email views
    Route::get('/all-admins', [AdminsController::class, 'allAdmins'])->name('admins.all.admin');
    // Create admin
    Route::get('/create-admins', [AdminsController::class, 'createAdmins'])->name('admins.create');
    Route::post('/create-admins', [AdminsController::class, 'storeAdmins'])->name('admins.store');

    //Countries view in admin page
    Route::get('/all-countries', [AdminsController::class, 'allCountries'])->name('all.countries');
    // Create Country
    Route::get('/create-county', [AdminsController::class, 'createCounty'])->name('create.county');
    Route::post('/create-county', [AdminsController::class, 'storeCountry'])->name('create.store');
    // Delete Country
    Route::get('/delete-county/{id}', [AdminsController::class, 'deleteCountry'])->name('delete.country');


    // City View In admin page
    Route::get('/all-cities', [AdminsController::class, 'allCities'])->name('all.cities');
    Route::get('/create-cities', [AdminsController::class, 'createCities'])->name('create.cities');
    Route::post('/create-cities', [AdminsController::class, 'storeCities'])->name('store.cities');
    Route::get('/delete-cities/{id}', [AdminsController::class, 'deleteCities'])->name('delete.cities');


    // Booking page
    Route::get('/all-booking', [AdminsController::class, 'allBooking'])->name('all.booking');
    Route::get('/edit-booking/{id}', [AdminsController::class, 'editBooking'])->name('edit.booking');
    Route::post('/update-booking/{id}', [AdminsController::class, 'updateBooking'])->name('update.booking');
    Route::get('/delete-booking/{id}', [AdminsController::class, 'deleteBooking'])->name('delete.booking');











});

