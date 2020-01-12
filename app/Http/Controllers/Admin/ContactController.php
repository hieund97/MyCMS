<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportContact;
use App\Imports\ImportContact;
use App\Mail\ReplyContactEmail;
use Illuminate\Support\Facades\Mail;

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

    public function edit($id){
        $reply = Contact::find($id);
        return view('admin.contact.reply', compact('reply'));
    }

    public function reply(Request $request){
        $reply = request()->validate([
            'title' => 'required',
            'message' => 'required'
        ]);
        Mail::to('boychel1997@gmail.com')->send(new ReplyContactEmail($reply));
       
    }

    // Import Contact from Excel
    // public function import(Request $request)
    // {
    //     $data = Excel::import(new ImportContact,  $request->file('file'));
    //     session()->flash('import_user', 'success');
    //     return back();
    // }

    // // Export Contact to Excel
    // public function export()
    // {
    //     return Excel::download(new ExportContact, 'contact.xlsx');
    // }
}
