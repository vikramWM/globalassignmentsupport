<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'mobile' => ['required', 'numeric'],
            'message' => ['required', 'string'],
        ];
    
        // Custom error messages
        $messages = [
            'name.required' => 'The first name field is required.',
            'name.string' => 'The first name must be a valid string.',
            'name.max' => 'The first name may not exceed 255 characters.',
            
            'last_name.required' => 'The last name field is required.',
            'last_name.string' => 'The last name must be a valid string.',
            'last_name.max' => 'The last name may not exceed 255 characters.',
            
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            
            'mobile.required' => 'The mobile number field is required.',
            'mobile.numeric' => 'The mobile number must be numeric.',
            
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a valid string.',
        ];
    
        // Validate the form input
        $validatedData = $request->validate($rules, $messages);
    
        // Create a new Contact instance and save the validated data
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->last_name = $validatedData['last_name'];
        $contact->email = $validatedData['email'];
        $contact->mobile = $validatedData['mobile'];
        $contact->message = $validatedData['message'];
        $contact->save(); // Save the contact information to the database
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    
    public function show()
    {
        $contact_data = Contact::orderBy('id', 'desc')->get();  // Fetch data in descending order by created_at
        return view('show', compact('contact_data'));
    }


}

