<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Attr_Order;
use App\Models\Product_back;
use App\Models\Product;

class OrderController extends Controller
{
    public function index(){
        $order = Order::latest()->get();
        return view('admin.order.index', compact('order'));
    }


    public function edit($id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        // dd(getVariant($attr_order->color, $attr_order->size, $attr_order->product_id));
        return view('admin.order.edit', compact('attr_order'));

    }

    public function update(Request $request, $id){
        $i = 0;
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);

        $attr_order->save();
        $variant = getVariant($attr_order->color, $attr_order->size, $attr_order->product_id);
        // Nếu cập nhật giao hàng thành công
        if($attr_order->status == 4){
            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
                'purchase' => $i + 1
            ]);
        }

        // Nếu cập nhật hàng trả về
        if($attr_order->status == 5){
            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
            ]);

            $product_back = Product_back::create([
                'product_id' => $variant->id,
                'status'     => 0 // 0. Hàng trả về lưu kho, 1. Hàng trả về nhưng đã đưa lại để bán lại
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

    public function updateStatus(Request $request, $id){
        $attr_order = Attr_Order::find($id);
        $attr_order->update([
            'status' => $request->status
        ]);

        $variant = getVariant($attr_order->color, $attr_order->size, $attr_order->product_id);
        // Nếu cập nhật giao hàng thành công
        if($attr_order->status == 4){
            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
                'purchase' => $variant->quantity + $attr_order->quantity
            ]);
        }

        // Nếu cập nhật hàng trả về
        if($attr_order->status == 5){
            $variant->update([
                'quantity' => $variant->quantity - $attr_order->quantity,
            ]);

            $product_back = Product_back::create([
                'variant_id' => $variant->id,
                'order_id'   => $attr_order->order_id,
                'product_id' => $attr_order->product_id,
                'quantity'   => $attr_order->quantity,
                'status'     => 0 // 0. Hàng trả về lưu kho, 1. Hàng trả về nhưng đã đưa lại để bán lại
            ]);
        }

        return response()->json([], 204);
    }

}
