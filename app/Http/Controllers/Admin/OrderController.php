<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Attr_Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index(){
        $order = Order::latest()->get();
        return view('admin.order.index', compact('order'));
    }


    public function edit($id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        return view('admin.order.edit', compact('attr_order'));

    }

    public function update(Request $request, $id){
        $i = 0;
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);
        $attr_order->save();
        if($attr_order->status == 4){
            $updateProduct = Product::where('id', $attr_order->product->id)->firstOrFail();
            $updateProduct->update([
                'quantity' => $updateProduct->quantity - $attr_order->quantity,
                'purchase' => $i + 1
            ]);
        }
        session()->flash('update_order', 'success');
        return redirect('/admin/order');
    }

    public function cancel(Request $request, $id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);
        return response()->json([], 204);
    }

}
