<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string',
            'budget' => 'nullable|string',
            'message' => 'required|string|min:10',
            'privacy' => 'required|accepted',
        ], [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'service.required' => 'Please select a service you are interested in.',
            'message.required' => 'Please tell us about your project.',
            'message.min' => 'Please provide at least 10 characters for your message.',
            'privacy.required' => 'You must agree to the privacy policy to continue.',
            'privacy.accepted' => 'You must agree to the privacy policy to continue.',
        ]);

        try {
            // Send email notification (you'll need to configure mail settings)
            // Mail::to('info@jezdan.co.tz')->send(new ContactFormSubmitted($validated));
            
            // Store in database if you have a contacts table
            // Contact::create($validated);

            return redirect()->route('contact')
                ->with('success', 'Thank you for contacting us! We will get back to you within 2 business hours.');

        } catch (\Exception $e) {
            return redirect()->route('contact')
                ->with('error', 'Sorry, there was an error sending your message. Please try again or call us directly.')
                ->withInput();
        }
    }
}
