<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use Auth;

class UserHistoryController extends Controller
{
    public function index() {

    	$user = Auth::user()->id;

    	$bookings = Booking::all()->where('user_id', $user)->where('is_active', 0);

    	$order_count = count($bookings);

    	return view('user_history', compact('bookings', 'order_count'));
    }
}
