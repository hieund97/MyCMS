<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function category($p_cate_slug){
        $cate = Categories::where('p_cate_slug', $p_cate_slug)->firstOrFail();
        return view('client.categories.category', compact('cate'));
    }
}
