<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payment_Method;
use App\Models\Ship_Method;
use Illuminate\Support\Facades\Auth;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $total = Cart::total();
        return view('client.cart.index', compact('total'));
    }

    public function add(Request $request)
    {
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

        
        switch ($request->add) {
            case 'paynow':
                return redirect('/gio-hang/thanh-toan');
                break;

            case 'addtocart':
                sleep(1);
                return back();
                break;

            default:
                sleep(1);
                return back();
                break;
        }
    }

    public function update($rowId, $qty){
        Cart::update($rowId, $qty);
    }


    public function delete($id)
    {
        Cart::remove($id);
        return response()->json([], 204);
    }

    

    public function checkout()
    {
        $quantity = Cart::content()->count();
        $total = (int) str_replace(',', '', Cart::total());
        $ships = Ship_Method::latest()->get();
        $pays = Payment_Method::latest()->get();
        return view('client.cart.checkout', compact('ships', 'pays', 'total', 'quantity'));
    }

    public function complete($order_code)
    {
        $orders = Order::where('order_code', $order_code)->firstOrFail();
        return view('client.cart.complete', compact('orders'));
    }
}
