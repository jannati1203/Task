<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the Contact Us page.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string',
            'budget' => 'nullable|string',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // Here inquiry handling (email/notification/db) would take place
        
        return back()->with('success', 'Thank you for reaching out to TechCare Solutions! Our enterprise technical support team will contact you within 2 business hours.');
    }
}
