<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry; // Add this line to import the Inquiry model

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|string|max:50',
            'province'  => 'required|string|max:255',
            'contact_message'   => 'required|string',
        ]);

        // Create a new inquiry record in the database
        $inquiry = Inquiry::create($data);

        // After saving to the database, you can implement additional logic 
        // like sending an email notification if needed.

        // Return a response. This can be a redirect or a JSON response 
        // depending on how you want to handle it on the frontend.
        // Here, I'll return a JSON response for simplicity.
        return response()->json(['message' => 'Inquiry submitted successfully, We will get back to you shortly!']);
    }
}
