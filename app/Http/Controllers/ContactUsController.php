<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'email'          => 'required|email',
            'subject'        => 'required',
            'phone'  => 'required|numeric',
            'message'        => 'required',
        ],[
            'name.required' => 'Please Enter Your Name',
            'email.required' => 'Please Enter Your Email Address',
            'subject.required' => 'Please Enter Subject',
            'phone.required' => 'Please Enter Your Phone Number',
            'message.required' => 'Please Enter Message'
        ]);

       ContactUs::create([
           'name'          => $request->name,
           'email'         => $request->email,
           'subject'       => $request->subject,
           'phone' => $request->phone,
           'message'       => $request->message,
       ]);

       return response()->json([ 'success'=> 'Form is successfully submitted!']);

   }
}
