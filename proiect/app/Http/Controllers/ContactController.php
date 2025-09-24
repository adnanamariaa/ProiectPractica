<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Afișează pagina de contact
    public function show()
    {
        return view('contact');
    }

    // Procesează formularul de contact
    public function send(Request $request)
    {
        // Validare date
        $validated = $request->validate([
            'nume' => 'required|string|max:255',
            'telefon' => 'required|string|max:20',
            'email' => 'required|email',
            'mesaj' => 'required|string',
        ]);

        // Trimite email
        Mail::to('seviv86198@fanwn.com')->send(new ContactFormMail($validated));

        // Redirecționează cu mesaj de succes
        return back()->with('success', 'Mesajul tău a fost trimis cu succes! Vom reveni în curând.');
    }
}
