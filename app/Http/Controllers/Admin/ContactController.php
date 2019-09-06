<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportContact;
use App\Imports\ImportContact;

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

    // Import Contact from Excel
    public function import(Request $request)
    {
        $data = Excel::import(new ImportContact,  $request->file('file'));
        session()->flash('import_user', 'success');
        return back();
    }

    // Export Contact to Excel
    public function export()
    {
        return Excel::download(new ExportContact, 'contact.xlsx');
    }
}
