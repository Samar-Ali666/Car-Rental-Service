<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class WelcomeController extends Controller
{
    public function index() {

    	$cars = Car::all()->take(5)->except('name', 'Audi A5');

    	return view('welcome', compact('cars'));
    }
}
