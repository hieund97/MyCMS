<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;

class RevenueController extends Controller
{
    public function index(Request $request){
        if (isset($request->from_date) && isset($request->to_date)) {
            $from_date = $request->from_date;
            $to_date = $request->to_date;
            $order = Order::whereBetween('day_created', [$from_date, $to_date])->get();
        }
        else {
            $order = Order::latest()->get();
        }

        $tong_nhap = 0;
        $tong_thu = 0;
        $loi_nhuan = 0;

        foreach ($order as $key => $value) {
            foreach ($value->attr_order as $index => $item) {
                $variant = getVariant($item->color, $item->size, $item->product_id);
                $tong_nhap +=  $variant->price_origin * $item->quantity;
                $tong_thu  += $item->price * $item->quantity;
                $loi_nhuan = $tong_thu - $tong_nhap;
            }
        }
        return view('admin.revenue.index', compact('order', 'tong_nhap', 'tong_thu', 'loi_nhuan'));
    }
}
