<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        // dd(Cart::total());
        // dd(Cart::content());
        $total = Cart::total();
        return view('client.cart.index', compact('total'));
    }

    public function add(Request $request)
    {
        // dd($request->all());
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
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->quantity,
            'price' => $price == $request->price ? $request->price : getPrice($product, $price),
            'weight' => 550,
            'options' => [
                'color' => is_array($request->Color) ? array_get($request->Color, '0') : $request->Color,
                'size' => is_array($request->Size) ? array_get($request->Size, '0') : $request->Size,
                'img' => json_decode($request->avatar)
            ]
        ]);
        return back();
    }

    public function delete($id)
    {
        Cart::remove($id);
        return response()->json([], 204);
    }
}
