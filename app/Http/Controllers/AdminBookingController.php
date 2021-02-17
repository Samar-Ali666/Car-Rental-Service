<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

class AdminBookingController extends Controller
{
    public function index() {

    	$bookings = Booking::latest()->where('is_active', 1)->paginate(6);

    	return view('admin.bookings.index', compact('bookings'));
    }

    public function show($id) {

    	$booking = Booking::findorFail($id);

    	return view('admin.bookings.show', compact('booking'));
    }

    public function update(Request $request, $id) {

    	$input = $request->except(['_token', '_method']);

    	Booking::whereId($id)->update($input);

    	$request->session()->flash('completed', 'Booking completed successfully and moved to booking history');

    	return redirect()->route('bookings.index');
    }

    public function destroy(Request $request, $id) {

    	$booking = Booking::findorFail($id);

    	$booking->delete();

    	$request->session()->flash('canceled', 'The booking has been cancel!');

    	return redirect()->route('bookings.index');
    } 

    public function history() {

    	$bookings = Booking::latest()->where('is_active', 0)->paginate(6);

    	return view('admin.bookings.history', compact('bookings'));
    }

    public function history_details($id) {

    	$booking = Booking::findorFail($id);

    	return view('admin.bookings.history_details', compact('booking'));
    }
}
