<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class AdminMailController extends Controller
{
    public function index() {

    	$mails = Contact::latest()->paginate(7);

    	return view('admin.mails.index', compact('mails'));
    }

    public function destroy($id) {

    	$mail = Contact::findOrFail($id);

    	$mail->delete();

    	alert()->success('Deleted!', 'The mail has been deleted successfully');

    	return redirect()->route('mails.index');
    }
}
