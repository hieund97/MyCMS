<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ship_Method;
use Illuminate\Support\Str;

class ShipMethodController extends Controller
{
    public function index()
    {
        $ship_method = Ship_Method::paginate(5);
        return view('admin.ship.index', compact('ship_method'));
    }

    public function edit(Ship_Method $ship_method)
    {
        return view('admin.ship.edit', compact('ship_method'));
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

        $ships = Ship_Method::create([
            'name' => $request->name,
            'price' => Intval(str_replace(",", "", $request->price)),
            'logo' => asset('media/avatar') . '/' . $logoName
        ]);

        session()->flash('create_ship', 'success');
        return redirect('/admin/ship-method');
    }

    public function update(Ship_Method $ship_method ,Request $request)
    {
        if ($request->hasFile('logo')) {
            $logoName = Str::uuid('image') . '.' . $request->logo->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->logo->move(public_path('media/avatar'), $logoName); // di chuyển vào thư mục trên ổ cứng
            $ship_method->update([
                'logo' => asset('media/avatar') . '/' . $logoName
            ]);
        }

        $ship_method->update([
            'name' => $request->name,
            'price' => Intval(str_replace(",", "", $request->price)),
        ]);

        session()->flash('update_ship', 'success');
        return redirect('/admin/ship-method');


    }

    public function destroy($ship_method)
    {
        $ships = Ship_Method::find($ship_method);
        $ships->delete();
        return response()->json([], 204);
    }
}
