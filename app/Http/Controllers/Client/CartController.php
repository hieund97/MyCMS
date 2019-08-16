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
        } else {
            $price = array_merge($request->Color, $request->Size);
        }

        $product = Product::findOrFail($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->quantity,
            'price' => getPrice($product, $price),
            'weight' => 550,
            'options' => ['color' => array_get($request->Color,'0'), 'size' => array_get($request->Size,'0'), 'img' => json_decode($request->avatar)]
        ]);
        return redirect('/gio-hang');
    }

    public function delete($id){
        Cart::remove($id);
        return redirect('/gio-hang');
    }
}
