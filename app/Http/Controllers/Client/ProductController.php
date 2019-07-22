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
        $featureProduct = Product::where('highlight', '=', 1)->inRandomOrder()->paginate(6);
        return view('client.product.index', compact('featureProduct'));
    }

    public function item($p_slug){
        $item = Product::where('p_slug', $p_slug)->firstOrFail();
        $randomProduct = Product::inRandomOrder()->paginate(4);
        $attribute = Attribute::all();
        return view('client.product.item', compact('item', 'randomProduct', 'attribute'));
    }
}
