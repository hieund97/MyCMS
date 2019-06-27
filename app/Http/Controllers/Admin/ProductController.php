<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $categories = Categories::get();
        return view('admin.product.index', compact('categories', 'parentCate'));
    }

    public function create(){
        $categories = Categories::get();
        return view('admin.product.create', compact('categories'));
    }
}
