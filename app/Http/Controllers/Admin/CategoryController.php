<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.categories.index');
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function edit(){
        return view('admin.categories.edit');
    }
}
