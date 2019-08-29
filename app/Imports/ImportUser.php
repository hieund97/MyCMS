<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;


class ImportUser implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],            
            'user_name' => $row['user_name'],
            'slug' => $row['slug'],
            'company' => $row['company'],
            'email' => $row['email'],
            'address' => $row['address'],
            'city' => $row['city'],
            'country' => $row['country'],
            'about_me' => $row['about_me'],
            'password' => Hash::make('12345678'),
            'phone' => $row['phone'],
            'level' => $row['level'],            
        ]);
    }
}
