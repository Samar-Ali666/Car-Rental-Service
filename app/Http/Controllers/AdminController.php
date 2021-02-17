<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Admin;

use App\Models\User;

use App\Models\Booking;

class AdminController extends Controller
{

    public function index() {

    	$bookings = Booking::latest()->where('is_active', 1)->paginate(5);

    	$users = User::latest()->paginate(5);

    	return view('admin.home', compact('users', 'bookings'));
    }
}
