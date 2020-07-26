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
        return view('client.product.index', compact('products','attribute'));
    }

    public function item($p_slug){
        $item = Product::where('p_slug', $p_slug)->firstOrFail();
        $randomProduct = Product::inRandomOrder()->paginate(4);
        $review = Review::where('product_id', $item->id)->get();
        
        return view('client.product.item', compact('item', 'randomProduct', 'review'));
    }

    public function filter(Request $request){
        $filterProducts = Product::whereBetween('price',[substr($request->start, 0, -1),substr($request->end, 0, -1)])->get();
        return view('client.product.filter', compact('filterProducts'));
    }

    public function getCustomPrice(Request $request){
        $price = array();
        if ($request->Color == NULL) {
            $price = $request->Size;
        } elseif ($request->Size == NULL) {
            $price = $request->Color;
        } elseif (is_array($request->Color) && is_array($request->Size)) {
            $price = array_merge($request->Color, $request->Size);
        } else {
            $price = $request->price;
        }

        $product = Product::findOrFail($request->id);

        $data = getPrice($product, $price);

        return response()->json(['data' => $data]);
    }
}
