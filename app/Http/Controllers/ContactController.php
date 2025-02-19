<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Example: Send an email (you can customize this)
        Mail::raw("Message from: {$request->name} ({$request->email})\n\n{$request->message}", function ($mail) use ($request) {
            $mail->to('admin@example.com')
                 ->subject('New Contact Form Submission');
        });

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }
}
