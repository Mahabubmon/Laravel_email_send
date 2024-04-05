<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mail', [TestController::class, 'mail']);

Route::post('send/mail/data', [TestController::class, 'send_mail_data'])->name('send.mail.data');