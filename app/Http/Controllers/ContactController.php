<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'company' => 'nullable|max:100',
            'budget' => 'nullable|in:small,medium,large,enterprise',
            'message' => 'required|min:20|max:1000',
        ]);

        // TODO: Implement email sending and Slack notification
        // Mail::to(config('mail.contact_email'))
        //     ->queue(new ContactFormMail($validated));

        // if (config('services.slack.webhook')) {
        //     Notification::route('slack', config('services.slack.webhook'))
        //         ->notify(new NewContactSubmission($validated));
        // }

        return response()->json([
            'success' => true,
            'message' => __('contact.success_message')
        ]);
    }
}
