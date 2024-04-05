<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class TestController extends Controller
{
    //
    public function mail()
    {
        return view('mail');
    }

    public function send_mail_data(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;

        $send_mail = "mahabubmon@gmail.com";

        Mail::to($send_mail)->send(new SendMail($name, $phone, $address));

        return "Mail sent Successfully";

    }
}
