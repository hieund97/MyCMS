<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Attr_Order;

class OrderController extends Controller
{
    public function index(){
        $order = Order::all();
        return view('admin.order.index', compact('order'));
    }


    public function edit($id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        return view('admin.order.edit', compact('attr_order'));

    }

    public function update(Request $request, $id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);
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
