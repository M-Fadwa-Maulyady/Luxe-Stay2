<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "message" => "required",
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // KIRIM EMAIL KE ADMIN
        Mail::to("farn@luxestay.com")->send(new ContactMail($data));

        return back()->with('success', 'Pesan berhasil dikirim melalui email!');
    }
}
