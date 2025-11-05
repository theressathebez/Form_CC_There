<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Carbon;

class MessageController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'birth_of_date' => 'required|date',
        ]);

        Message::create($validated);

        try {
            $formattedDate = Carbon::parse($validated['birth_of_date'])->format('F j, Y');

            Mail::to($validated['email'])->send(new TestMail([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'birth_of_date' => $formattedDate,
                'subject' => 'Cloud Computing 2025 Registration Confirmation 💗',
                'content' => 'Thank you for registering for Cloud Computing 2025! 🌸'
            ]));

            return view('success', ['name' => $validated['name']]);
        } catch (\Exception $e) {
            return back()->with('error', 'Email gagal dikirim: ' . $e->getMessage());
        }
    }
}
