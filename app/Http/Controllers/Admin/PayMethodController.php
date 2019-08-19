<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment_Method;
use Illuminate\Support\Str;

class PayMethodController extends Controller
{
    public function index()
    {
        $pay_method = Payment_Method::paginate(5);
        return view('admin.pay.index', compact('pay_method'));
    }

    public function edit(Payment_Method $payment_method)
    {
        return view('admin.pay.edit', compact('payment_method'));
    }

    public function store(Request $request)
    {
        $logoName = Null;
        if ($request->hasFile('logo')) {
            $logoName = Str::uuid('image') . '.' . $request->logo->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->logo->move(public_path('media/avatar'), $logoName); // di chuyển vào thư mục trên ổ cứng            
        } else {
            $logoName = 'noimage.png';
        }

        $pays = Payment_Method::create([
            'name' => $request->name,            
            'logo' => asset('media/avatar') . '/' . $logoName
        ]);

        session()->flash('create_pay', 'success');
        return redirect('/admin/pay-method');
    }

    public function update(Payment_Method $payment_method, Request $request)
    {
        if ($request->hasFile('logo')) {
            $logoName = Str::uuid('image') . '.' . $request->logo->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->logo->move(public_path('media/avatar'), $logoName); // di chuyển vào thư mục trên ổ cứng
            $payment_method->update([
                'logo' => asset('media/avatar') . '/' . $logoName
            ]);
        }

        $payment_method->update([
            'name' => $request->name,            
        ]);

        session()->flash('update_pay', 'success');
        return redirect('/admin/pay-method');
    }

    public function destroy(Payment_Method $payment_method)
    {        
        $payment_method->delete();
        return response()->json([], 204);
    }
}
