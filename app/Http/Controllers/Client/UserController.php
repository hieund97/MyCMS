<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attr_Order;
use App\Models\Order;
use App\Models\User;

class UserController extends Controller
{
    public function detail($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        return view('client.user.detail', compact('user'));
    }

    public function update(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng
            $user->update([
                'avatar' => asset('media/avatar') . '/' . $avatarName
            ]);
        }       
        $user->update([            
            'user_name' => $request->username,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'about_me' => $request->aboutme,
            'slug' => str_slug($request->username, '-')

        ]);
        $user->save();
        session()->flash('update_user', 'success');
        return redirect('/thanh-vien/' . $user->slug);
    }

    public function updatepass($slug){
        $user = User::where('slug', $slug)->firstOrFail();        
        return view('client.user.updatepass', compact('user'));
    }

    public function changepass(Request $request, $slug){
        $this->validate($request,
            [
                'password' => 'min:8|required|required_with:retypepassword|same:retypepassword|same:password',
                'retypepassword' => 'min:8|required'
            ],
            [
                'require' => 'Trường này trống cmnr',                
            ]
        );
        $user = User::where('slug', $slug)->firstOrFail();
        $user->update([
            'password' => bcrypt($request->password),
        ]);
        session()->flash('change_pass', 'success');
        return redirect('/thanh-vien/' . $user->slug);
    }

    public function order($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        $orders = Order::where('user_id', $user->id)->paginate(5);
        // dd($orders);
        return view('client.user.order', compact('user', 'orders'));
    }

    public function cancelorder(Request $request, $id){
        $attr_order = Attr_Order::where('id', $id)->firstOrFail();
        $attr_order->update([
            'status' => $request->status,
        ]);
        return response()->json([], 204);
    }
}
