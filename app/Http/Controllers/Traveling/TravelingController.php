<?php

namespace App\Http\Controllers\Traveling;

use App\Models\City\City;
use Illuminate\Http\Request;
use App\Models\Country\Country;
use App\Http\Controllers\Controller;
use App\Models\Reservation\Reservation;
use Session;

class TravelingController extends Controller
{
    public function about($id)
    {
        $cities = City::select()->orderBy('id', 'desc')->take(5)->where('country_id', $id)->get();

        $country = Country::find($id);

        $citiesCount = City::select()->where('country_id', $id)->count();

        return view('traveling.about', compact('cities', 'country', 'citiesCount'));
    }

    // Reservation Center here

    public function makeReservation($id)
    {
        $city = City::find($id);

        return view('traveling.reservation', compact('city'));
    }
    
    
    // Now the turn Put the reservation data in database
    public function storeReservation(Request $request, $id)
    {
        $city = City::find($id);

        // Jo date select ho, wo Porane date se grater then ho, os ka pattern ye hai
        if($request->cheak_in_date > date("Y-m-d"))
        {
            $totalPrice = (int)$city->price * (int)$request->num_guests;
            $storeReservation = Reservation::create([
                "name"          =>  $request->name,
                "phone_number"  =>  $request->phone_number,
                "num_guests"    =>  $request->num_guests,
                "cheak_in_date" =>  $request->cheak_in_date,
                "destination"   =>  $request->destination,
                "price"         =>  $totalPrice,
                "user_id"       =>  $request->user_id,
            ]);

                if($storeReservation)
                {
                    
                    $price = Session::put('price', $city->price * $request->num_guests);
                    $newPrice = Session::get($price);
                    
                    // echo "Reservation is made successfully";
                    return redirect()->back()->with('message', 'Reservation is made successfully');
                }

        } else {
            echo "Invalid Date, you need to Choose Date in the future";
        }


        // return view('traveling.reservation', compact('city'));
    }

    // Deals Page turn
    
    public function deals()
    {
        $cities = City::select()->orderBy('id', 'desc')->take(4)->get();
        $countries = Country::all();
        return view('traveling.deals', compact('cities', 'countries'));
    }
    

    // Search Deals
    public function searchDeals(Request $request)
    {

        $country_id = $request->get('country_id');
        $price = $request->get('price');

        $searches = City::where('country_id', $country_id)
         ->where('price', '<=', $price)->orderBy('id', 'desc')
         ->take(4)
         ->get();

        $countries = Country::all();

        return view('traveling.searchdeals', compact('searches', 'countries'));
    }
}
