<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //

    public function index()
    {
        $mailData = [
            'title' => 'Mail From Mahabub',
            'body' => 'This is for testing email'
        ];
        Mail::to('mahabubmon@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfully');
    }
}
