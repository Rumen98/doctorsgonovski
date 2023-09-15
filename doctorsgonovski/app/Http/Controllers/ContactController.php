<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index', [
            'title' => 'Contact Page'
        ]);
    }

    public function sendEmail(Request $request)
    {
        // Dynamic Validation
        $validationRules = [
            'fullName' => 'required|string|max:255',
            'emailAddress' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            // You can add more rules here in the future if needed.
        ];

        $request->validate($validationRules);

        // Dynamically collect form data
        $data = $request->all();


        // If you have other fields in your request that you want to exclude, use the 'except' method.
        // $data = $request->except('_token', 'anotherFieldToExclude');

        // Send the email
        Mail::to('kristijangonovski@gmail.com')->send(new ContactFormMailable($data));

        // Return a JSON response
        return response()->json(['message' => 'Thank you for contacting us!'], 200);
    }

}
