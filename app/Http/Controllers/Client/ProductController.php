<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Image_product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(12);
        // dd($products);        
        return view('client.product.index', compact('products','attribute'));
    }

    public function item($p_slug){
        $item = Product::where('p_slug', $p_slug)->firstOrFail();
        $randomProduct = Product::inRandomOrder()->paginate(4);        
        return view('client.product.item', compact('item', 'randomProduct', 'attribute'));
    }
}
