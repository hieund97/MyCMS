<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportContact implements FromView
{
    

    public function view(): View
    {
        return view('admin.contact.index', [
            'contacts' => Contact::all()
        ]);
    }
}
