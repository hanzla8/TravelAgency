<?php

namespace App\Http\Controllers\Admins;

use File;
use App\Models\City\City;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Models\Country\Country;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservation\Reservation;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Admins\AdminsController;

class AdminsController extends Controller
{
    


    public function viewLogin()
    {
        return view('admins.login');
    }
    
    
    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index()
    {
        $countriesCount = Country::select()->count();
        $citiesCount = City::select()->count();
        $adminsCount = Admin::select()->count();

        return view('admins.index', compact('countriesCount', 'citiesCount', 'adminsCount'));
    }
    

    // Admins Setting
    public function allAdmins()
    {

        $allAdmins = Admin::select()->orderBy('id', 'desc')->get();

        return view('admins.alladmins', compact('allAdmins'));
    }
    

    // create Admin
    public function createAdmins()
    {

        $allAdmins = Admin::select()->orderBy('id', 'desc')->get();

        return view('admins.createadmins');
    }

    
    // Admin Creation Post
    public function storeAdmins(Request $request)
    {

        $storeAdmins = Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        if($storeAdmins)
        {
            return Redirect::route('admins.all.admin')->with('success', 'Your Admin Created Successfully');
        }

    }


    // COuntries View In admin page
    public function allCountries()
    {

        $allCountries = Country::select()->orderBy('id', 'desc')->get();

        return view('admins.allcountries', compact('allCountries'));
    }

    // Create Country
    public function createCounty()
    {
        return view('admins.createcountry');
    }

    public function storeCountry(Request $request)
    {

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeCountry = Country::create([
            "name"        => $request->name,
            "continent"   => $request->continent,
            "population"  => $request->population,
            "avg_price"  => $request->population,
            "territory"   => $request->territory,
            "description" => $request->description,
            "image"       => $myimage,
            

        ]);
        if($storeCountry)
        {
            return Redirect::route('all.countries')->with('success', 'Your Country Data Created Successfully');
        }

    }


    public function deleteCountry($id)
    {

        $deleteCountry = Country::find($id);

        if(File::exists(public_path('assets/images/' . $deleteCountry->image))){
            File::delete(public_path('assets/images/' . $deleteCountry->image));
        }else{
            //dd('File does not exists.');
        }

        $deleteCountry->delete();

        if($deleteCountry)
        {
            return Redirect::route('all.countries')->with('delete', 'Your Country Data Deleted Successfully');
        }
        
    }

    // All Cities View Start here
    public function allCities()
    {

        $allCities = City::select()->orderBy('id', 'desc')->get();

        return view('admins.allcities', compact('allCities'));
    }


    // Create City Page
    public function createCities()
    {
        $countries = Country::all();
        return view('admins.createcity', compact('countries'));
    }

    // Store City Data
    public function storeCities(Request $request)
    {

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeCountry = City::create([
            "name"        => $request->name,
            "num_days"  => $request->num_days,
            "price"  => $request->price,
            "country_id" => $request->country_id,
            "image"       => $myimage,
            

        ]);
        if($storeCountry)
        {
            return Redirect::route('all.cities')->with('success', 'Your Cities Data Created Successfully');
        }

    }

    // Delete City Adresses
    public function deleteCities($id)
    {

        $deleteCity = City::find($id);

        if(File::exists(public_path('assets/images/' . $deleteCity->image))){
            File::delete(public_path('assets/images/' . $deleteCity->image));
        }else{
            //dd('File does not exists.');
        }

        $deleteCity->delete();

        if($deleteCity)
        {
            return Redirect::route('all.cities')->with('delete', 'Your Country Data Deleted Successfully');
        }
        
    }

    // Show Booking Items
    public function allBooking()
    {
        $allReservations = Reservation::select()->orderBy('id', 'desc')->get();

        return view('admins.allBooking', compact('allReservations'));
    }

    // edit Booking
    public function editBooking($id)
    {
        $booking = Reservation::find($id);

        return view('admins.editBooking', compact('booking'));
    }
    

    public function updateBooking(Request $request, $id)
    {
        $editbooking = Reservation::find($id);

        $editbooking->update($request->all());

        if($editbooking)
        {
            return Redirect::route('all.booking')->with('update', 'Your Booking Status updated Successfully');
        }
    }

    // Delete Booking Adresses
    public function deleteBooking($id)
    {

        $deleteBooking = Reservation::find($id);


        $deleteBooking->delete();

        if($deleteBooking)
        {
            return Redirect::route('all.booking')->with('delete', 'Your Booking Data Deleted Successfully');
        }
        
    }
    
    
    
}
