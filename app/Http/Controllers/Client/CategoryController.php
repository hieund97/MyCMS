<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Attribute;

class CategoryController extends Controller
{
    public function category($p_cate_slug){
        $cate = Categories::where('p_cate_slug', $p_cate_slug)->firstOrFail();
        $category = $cate->product()->paginate(12);
        $attribute = Attribute::all();
        
        return view('client.categories.category', compact('cate', 'category', 'attribute'));
    }
}
