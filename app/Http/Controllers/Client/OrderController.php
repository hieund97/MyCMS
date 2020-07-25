<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attr_Order;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Cart;
use Illuminate\Support\Carbon;


class OrderController extends Controller
{

    public function storeOrder(Request $request)
    {

        $this->validate(
            $request,
            [
                'email' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'ship' => 'required',
                'pay' => 'required',

            ],
            [
                'require' => 'Trường này trống cmnr',
            ]
        );

        if (Auth::check()) {
            $order = Order::create([
                'order_code' => rand(),
                'note' => $request->note,
                'quantity' => $request->quantity,
                'total_price' =>$request->total_price,
                'pay_id' => $request->pay,
                'ship_id' => $request->shiphidden,
                'address' => $request->address,
                'user_id' => $request->user_id,

            ]);
            $order->save();
            foreach (Cart::content() as $key => $product) {

                $attr = Attr_Order::create([
                    'price' => $product->price * $product->qty,
                    'quantity' => $product->qty,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                    'order_id' => $order->id,
                    'product_id' => $product->id
                ]);
                Cart::remove($product->rowId);
            }
        } else {


            $guest = Guest::create([
                'client_name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
            ]);
            $guest->save();

            $order = Order::create([
                'order_code' => rand(),
                'quantity' => $request->quantity,
                'total_price' =>$request->total_price,
                'note' => $request->note,
                'pay_id' => $request->pay,
                'ship_id' => $request->shiphidden,
                'address' => $request->address,
                'guest_id' => $guest->id,

            ]);
            $order->save();
            foreach (Cart::content() as $key => $product) {
                $attr = Attr_Order::create([
                    'price' => $product->price * $product->qty,
                    'quantity' => $product->qty,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                    'order_id' => $order->id,
                    'product_id' => $product->id
                ]);
                Cart::remove($product->rowId);
            }
        }
        return redirect('/gio-hang/hoan-thanh/' . $order->order_code);
    }
}
