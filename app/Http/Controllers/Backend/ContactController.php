<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function AllContact()
    {

        return view('contact');
    }

    public function StoreContact(Request $request)
    {

        $contacts = new ContactModel;
        $contacts->name = trim($request->name);
        $contacts->email = trim($request->email);
        $contacts->phone = trim($request->phone);
        $contacts->subject = trim($request->subject);
        $contacts->message = trim($request->message);
        $contacts->status = 'new';

        if (Auth::check()) {
            $contacts->user_id = Auth::user()->id;
        } else {
            // Assign a default value or handle differently
            $contacts->user_id = null; // or some other default value
        }
        $contacts->save();

        $notification = array(
            'message' => 'Your Message Sent Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('contactus')->with($notification);

    }
}
