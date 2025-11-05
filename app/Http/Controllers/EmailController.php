<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\TestMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate using the actual field name from your form
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'name' => 'required|string',
        ]);

        // Send email
        Mail::to($request->email)->send(new TestMail($request->all()));

        return view('success', ['name' => $request->name]);
    }
}