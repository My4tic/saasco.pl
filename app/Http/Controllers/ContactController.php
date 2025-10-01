<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:20',
            'budget' => 'nullable|string|max:50',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // Save to database
        $submission = ContactSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'budget' => $validated['budget'] ?? null,
            'message' => $validated['message'],
            'locale' => app()->getLocale(),
            'ip_address' => $request->ip(),
        ]);

        // Send email notification
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactFormMail($submission));
        } catch (\Exception $e) {
            \Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        return back()->with('success', __('contact.success_message'));
    }
}
