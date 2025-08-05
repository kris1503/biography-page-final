<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // <-- ADD THIS

class BioController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Save to DB
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
