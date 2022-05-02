<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user()->id;

        $bookings = Booking::all()->where('user_id', $user)->where('is_active', 1);

        $order_count = count($bookings);

        return view('home', compact('bookings', 'order_count'));
    }

    public function destroy(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->delete();

        alert()->error('Cancelled', 'booking has been canceled');

        return redirect()->route('home');
    }
}
