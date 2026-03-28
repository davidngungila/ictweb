<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoRequestSubmitted;

class DemoController extends Controller
{
    /**
     * Handle demo request form submission.
     */
    public function submit(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'demo_type' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'preferred_date' => 'required|date|after:today',
            'preferred_time' => 'required|string',
            'message' => 'nullable|string|min:10',
        ], [
            'demo_type.required' => 'Please select a demo type.',
            'company_name.required' => 'Please enter your company name.',
            'contact_person.required' => 'Please enter the contact person name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'preferred_date.required' => 'Please select a preferred date.',
            'preferred_date.after' => 'Please select a future date.',
            'preferred_time.required' => 'Please select a preferred time.',
            'message.min' => 'Please provide at least 10 characters for additional information.',
        ]);

        try {
            // Send email notification (you'll need to configure mail settings)
            // Mail::to('info@jezdan.co.tz')->send(new DemoRequestSubmitted($validated));
            
            // Store in database if you have a demo_requests table
            // DemoRequest::create($validated);

            return redirect()->route('request-demo')
                ->with('success', 'Demo request submitted successfully! Our team will contact you within 24 hours to schedule your live demonstration.');

        } catch (\Exception $e) {
            return redirect()->route('request-demo')
                ->with('error', 'Sorry, there was an error submitting your demo request. Please try again or call us directly.')
                ->withInput();
        }
    }
}
