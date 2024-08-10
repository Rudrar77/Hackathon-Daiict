<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function create()
    {
        return view('contactus');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'mobile' => 'nullable|string|max:15',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone, // Ensure this matches your form field
            'message' => $request->message,
        ]);

        return view('contactus');
    }
}
