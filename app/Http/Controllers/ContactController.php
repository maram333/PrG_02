<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //public function __construct() 
    //{  
    //    $this->middleware('auth'); 
    //} 

    public function store(Request $request)
    {
    
        try {
            // Validate the request data
            $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
            ]);

            // Save the data to the database
            $contact = new Contact();
            $contact->name = $validatedData['name'];
            $contact->email = $validatedData['email'];
            $contact->message = $validatedData['message'];
            $contact->save();

            // Return a JSON response
            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully!',
            ]);

        } catch (\Exception $e) {
            // Log the error
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ]);
        }
    }
 


    public function index()
    {
         // Fetch all messages from the database
         $contacts = Contact::all();

         // Return the view with the messages
         return view('messages.index', compact('contacts'));
    }
} 