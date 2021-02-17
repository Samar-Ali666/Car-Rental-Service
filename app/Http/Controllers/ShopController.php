<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Car;

class ShopController extends Controller
{
    public function index() {

    	$cars = Car::all();

    	$categories = Category::all();

    	return view('shop', compact('cars', 'categories'));
    }

    public function show($id) {

    	$car = Car::findOrFail($id);

    	return view('single_car', compact('car'));
    }
}
