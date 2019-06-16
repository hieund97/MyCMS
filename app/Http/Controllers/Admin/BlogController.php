<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.index');
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function category(){
        return view('admin.blog.category');
    }
}
