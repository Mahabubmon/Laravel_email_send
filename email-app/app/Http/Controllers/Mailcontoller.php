<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mailcontoller extends Controller
{
    //
    public function mail()
    {
        return view('mail');
    }
}
