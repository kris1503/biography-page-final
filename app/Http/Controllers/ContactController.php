<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Make sure you have this model
use Illuminate\Routing\Controller; // You can keep or remove this; it's optional if extending base Controller

class ContactController extends Controller
{
    // Show the contact form
    public function index()
    {
        return view('contact');
    }

    // Handle the contact form submission
    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
