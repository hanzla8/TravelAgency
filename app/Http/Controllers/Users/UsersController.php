<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation\Reservation;

class UsersController extends Controller
{
    public function booking()
    {
        $bookings = Reservation::where('user_id', Auth::user()->id)
         ->orderBy('id', 'desc')
         ->get();

        return view('users.bookings', compact('bookings'));
    }
}
