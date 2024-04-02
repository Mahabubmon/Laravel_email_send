<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\EmailTemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('send-mail', [MailController::class, 'index']);
Route::get('email', [EmailTemplateController::class, 'index']);
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::get('mail', [MailController::class, 'mail']);