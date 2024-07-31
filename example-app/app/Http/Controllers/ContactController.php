<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $details = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:20',
            'msg' => 'required|string',
        ]);

        Mail::to('recipient@example.com')->send(new ContactMail($details));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
