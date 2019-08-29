<?php

namespace App\Imports;

use App\Blog;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ImportBlog implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Blog([
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
            'phone' => $row['phone'],
            'level' => $row['level'],
        ]);
    }
}
