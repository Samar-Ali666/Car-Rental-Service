<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Admin;

use App\Models\User;

use App\Models\Car;

use App\Models\Category;

use App\Models\Booking;

class AdminController extends Controller
{

    public function index() {

    	$bookings = Booking::latest()->where('is_active', 1)->paginate(5);

    	$users = User::latest()->paginate(5);

    	$car_count = Car::count();

    	$user_count = User::count();

    	$category_count = Category::count();

    	return view('admin.home', compact('users', 'bookings', 'car_count', 'user_count', 'category_count'));
    }
}