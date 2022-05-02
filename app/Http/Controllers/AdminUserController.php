<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Jobs\RestrictUser;

use App\Jobs\ActivateUser;

use App\Mail\RestrictUserMail;

use App\Mail\ActivateUserMail;

use App\Models\Booking;

use Auth;

class AdminUserController extends Controller
{
    public function show($id){

    	$user = User::findOrFail($id);

    	$userBookings = Booking::all()->where('user_id', $user->id)->where('is_active', 1);

    	$userBookingsHistory = Booking::all()->where('user_id', $user->id)->where('is_active', 0);

    	return view('admin.users.show', compact('user', 'userBookings', 'userBookingsHistory'));
    }

    public function userAccess(Request $request, $id){

        $input = $request->except(['_token', '_method']);

        User::whereId($id)->update($input);

        $user = User::findOrFail($id);

        if ($user->user_status == 0) {
            
            RestrictUser::dispatch($user)->onQueue('restrict_user');

            alert()->error('User Blocked!', 'The user has been blocked');
        } else {

            ActivateUser::dispatch($user)->onQueue('activate_user');

            alert()->success('User Activated!', 'The user has been activated');
        }

        return redirect()->back();
    }
}

