<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|string|max:50',
            'province'  => 'required|string|max:255',
            'message'   => 'required|string',
        ]);

        // Create a new inquiry record in the database
        $inquiry = Inquiry::create($data);

        // After saving to the database, you can implement additional logic 
        // like sending an email notification if needed.

        // Return a response. This can be a redirect or a JSON response 
        // depending on how you want to handle it on the frontend.
        // Here, I'll return a JSON response for simplicity.
        return response()->json(['message' => 'Inquiry submitted successfully!']);
    }
}
