<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BookingController extends Controller
{
	
    public function checkout(Request $request, $id) {

    	$car = Car::findOrFail($id);

    	$days = $request->input('days');

    	if ($days == '' || $days < 1) {
    		
    		$days = 1;
    	}

    	$type = $request->input('type');

    	if ($type == '') {
    		
    		$type = "Inside City";
    	}

    	$totalAmount = ($car->rent * $days);

    	return view('checkout', compact('car', 'days', 'type', 'totalAmount'));
    }

    public function checkoutConfirm(Request $request) {

    	$validator = Validator::make($request->all(),[
    		'firstName' => 'required',
    		'lastName' => 'required',
    		'email' => 'required',
    		'address' => 'required',
    		'contact' => 'required|numeric',
    		'city' => 'required',
    		'zip' => 'required',
    		'user_id' => 'required',
    		'car_id' => 'required', 
    		'days' => 'required',
    	]);

    	if($validator->fails()){

    		return redirect()->back()->withErrors($validator);
    	}

    	$user_id = $request->input('user_id');

    	if ($user_id != Auth::user()->id || $user_id == '') {
    		
    		$request->session()->flash('Oops', 'Oops something went wrong!, Try Again');

    		return redirect()->back();
    	}

    	$input = $request->all();

    	Booking::create($input);

    	$request->session()->flash('confirmed', 'Your booking is placed. We will contact you shortly, Thank You!');

    	return redirect()->route('home');
    }
}
