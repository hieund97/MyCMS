<?php

namespace App\Exports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        return User::select(
            'id',
            'first_name',
            'last_name', 
            'slug',           
            'user_name',            
            'company',
            'email',
            'address',
            'city',
            'country',
            'about_me',
            'avatar',            
            'phone',
            'level',
            'created_at',
            'updated_at'           
        )->get();
    }

    public function headings() : array
    {
        return [
            'id',
            'first_name',
            'last_name', 
            'slug',           
            'user_name',            
            'company',
            'email',
            'address',
            'city',
            'country',
            'about_me',
            'avatar',            
            'phone',
            'level',
            'created_at',
            'updated_at',            
        ];
    }
}
