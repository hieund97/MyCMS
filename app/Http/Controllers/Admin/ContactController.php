<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return response()->json([], 204);
    }
}
