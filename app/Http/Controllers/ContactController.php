<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Validator;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {

    	return view('contact');
    }

    public function store(Request $request) {

    	$validator = Validator::make($request->all(), [
    		'firstName' => 'required',
    		'lastName' => 'required',
    		'email' => 'required',
    		'message' => 'required',
    	]);

    	if ($validator->fails()) {
    		
    		return back()->with('error', $validator->messages()->all()[0])->withInput();
    	}

    	$input = $request->all();

    	Contact::create($input);

    	Alert::success('Sent!', 'your message has been sent successfully!');

    	return redirect()->route('contact');
    }
}
