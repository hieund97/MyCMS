<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormEmail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        // Mail::to('boychel1997@gmail.com')->send(new ContactFormEmail($contact));

        session()->flash('send_email', 'success');
        return redirect('/lien-he');
    }
}
