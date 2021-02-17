<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

use App\Models\User;

class SingleCarController extends Controller
{
	
    public function index() {

    	return view('single_car');
    }
}
