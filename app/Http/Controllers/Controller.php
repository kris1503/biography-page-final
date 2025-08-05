<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // <-- ADD THIS

class BioController extends Controller
    // Show contact form
    public function index()
    {
        return view('biography.contact');
    }

    // Store submitted contact form message
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($request->only('name', 'email', 'message'));

        return back()->with('success', 'Your message has been sent!');
    }

    // Show all messages on a page
    public function showContacts()
    {
        $messages = Message::all();
        return view('contacts.index', compact('messages')); // Your view to list messages
    }
}
