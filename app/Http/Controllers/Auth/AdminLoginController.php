<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Alert;
use Auth;
use Route;

class AdminLoginController extends Controller
{
    public function __construct() {

        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm() {

        return view('admin.auth.login');
    }

    public function login(Request $request) {

    	$credentials = $request->only('email', 'password');

    	if (Auth::guard('admin')->attempt($credentials, $request->remember)) {

    		$user = Admin::where('email', $request->email)->first();

    		Auth::guard('admin')->login($user);

            toast('The admin has been logged In!','success')->timerProgressBar();
    		
    		return redirect()->route('admin.home');
    	}

    	return redirect()->route('admin.login')->with('status', 'Incorrect email or password!');
    }
}
