<?php

namespace App\Exports;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportBlog implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        return view('admin.blog.index', [
            'blogs' => Blog::all()
        ]);
    }
}
