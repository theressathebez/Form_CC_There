<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EmailController;

Route::get('/', [MessageController::class, 'index']);
Route::post('/send', [MessageController::class, 'store'])->name('send.message');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');