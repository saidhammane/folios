<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $mailData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ];

         
        $mailer = config('mail.default');
        $smtpHost = config('mail.mailers.smtp.host');
        $smtpUser = config('mail.mailers.smtp.username');

        try {
            // Force SMTP so we don't silently use the log/array mailer.
            Mail::mailer('smtp')->to('saidhammane26@gmail.com')->send(new MailSender($mailData));
            Log::info('Mail sent', [
                'mailer' => $mailer,
                'smtp_host' => $smtpHost,
                'smtp_user' => $smtpUser,
            ]);
            return response()->json([
                'status' => 'ok',
                'mailer' => $mailer,
            ]);
        } catch (\Throwable $e) {
            Log::error('Mail send failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'mailer' => $mailer,
                'smtp_host' => $smtpHost,
                'smtp_user' => $smtpUser,
            ]);
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
