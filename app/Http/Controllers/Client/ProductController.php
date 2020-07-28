<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Review;
use App\Models\Sale;
use App\Models\Variant;
use App\Models\Value;

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
        $data_value_id = Value::select('id')->where('value', $request->color)->orWhere('value', $request->size)->get();

        $data = Variant::select('variant.id')->where('variant.product_id', $request->id)
        ->join('variant_value', 'variant_value.variant_id', '=', 'variant.id')
        ->whereIn('variant_value.value_id', $data_value_id)
        ->get()->toArray();

        $variant_id = '';

        foreach ($data as $key => $value) {
            if($data[$key]['id'] == $data[$key + 1]['id']){
                $variant_id = $data[$key]['id'];
                break;
            };
        }

        $variant = Variant::find($variant_id);

        return response()->json(['price' => $variant->price, 'quantity' => $variant->quantity]);
    }

    public function checkSale(Request $request){
        $checkSale = Sale::where('code_sale', $request->code)->first();

        if ($checkSale) {
            return response()->json(['status' => 200, 'percent' => $checkSale->percent_sale, 'name' => $checkSale->name, 'message' => 'Áp dụng thành công']);
        }

        return response()->json(['status' => 400, 'message' => 'Mã khuyến mại không tồn tài']);
    }
}
