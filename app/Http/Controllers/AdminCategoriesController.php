<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Category;

class AdminCategoriesController extends Controller
{
    public function index() {

    	$categories = Category::latest()->paginate(6);

    	$categories_count = Category::count();

    	return view('admin.categories', compact('categories', 'categories_count'));
    }

    public function store(Request $request) {

    	$request->validate([

    		'name' => 'required'
    	]);

    	$input = $request->all();

    	Category::create($input);

        alert()->success('Created', 'Category has been created successfully!');

    	return redirect()->route('categories.index');
    }

    public function destroy(Request $request, $id) {

    	$category = Category::findOrFail($id);

    	$category->delete();

        alert()->success('Deleted!', 'The category has been deleted sucessfully!');

    	return redirect()->route('categories.index');
    }
}
