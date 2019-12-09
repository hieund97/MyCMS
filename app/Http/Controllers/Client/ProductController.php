<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Review;

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
        $review = Review::where('product_id', $item->id)->get();
        
        return view('client.product.item', compact('item', 'randomProduct', 'review'));
    }

    public function filter(Request $request){
        // dd($request->all());
        $filterProducts = Product::whereBetween('price',[substr($request->start, 0, -1),substr($request->end, 0, -1)])->get();
        return view('client.product.filter', compact('filterProducts'));
    }
}
