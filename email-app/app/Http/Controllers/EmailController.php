<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::send('emails.send', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Test Email');
        });

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}

