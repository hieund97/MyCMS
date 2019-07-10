<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\Attribute;

class ProductController extends Controller
{
    public function index(){
        $categories = Categories::get();
        return view('admin.product.index', compact('categories', 'parentCate'));
    }

    public function create(){
        $categories = Categories::get();
        $attrs = Attribute::all();
        return view('admin.product.create', compact('categories', 'attrs'));
    }

    public function value(){
        $attrs = Attribute::all();
        return view('admin.product.value', compact('attrs'));
    }
}
