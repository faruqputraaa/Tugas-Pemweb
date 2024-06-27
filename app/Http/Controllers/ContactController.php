<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'subject.required' => 'Subjek harus diisi.',
            'message.required' => 'Pesan harus diisi.',
        ]);

        // Prepare email data
        $emailData = [
            'subject' => $request->subject,
            'messageContent' => $request->message,
        ];

        // Send email
        Mail::send('emails.contact', $emailData, function ($message) use ($emailData) {
            $message->to('rama420@students.amikom.ac.id')
                    ->subject($emailData['subject']);
        });

        // Redirect back with success message
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}
