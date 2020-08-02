<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Order;
use \PDF;

class PdfController extends Controller
{
    public function ticket_pdf(Request $request)
    {
    	$now = Carbon::now()->format('Y-m-d');

        if(isset($request->date) && $request->date != null){
            $now = date('Y-m-d',strtotime($request->date));
        }
        $listTicket = Product::where('day_created', $now)->get();

        $pdf = PDF::loadView('admin.pdf.ticket_pdf',  compact('listTicket', 'now'));
        $pdf->setPaper('A4', 'landscape');
    		return $pdf->download('ticket.pdf');
    }

    public function analytic_pdf(Request $request)
    {
        $from_date = null;
        $to_date = null;
    	if (isset($request->from_date) && isset($request->to_date) && $request->from_date != null && $request->to_date != null) {
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

        $pdf = PDF::loadView('admin.pdf.analytic_pdf',  compact('order', 'tong_nhap', 'tong_thu', 'loi_nhuan', 'from_date', 'to_date'));
        $pdf->setPaper('A4', 'landscape');
    		return $pdf->download('analytic.pdf');
    }
}
