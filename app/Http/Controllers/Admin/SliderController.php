<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(Slider $slider){
        $sliders = Slider::paginate(3);
        return view('admin.slider.index', compact('sliders', 'slider'));
    }

    public function create(){
        return view('admin.slider.create');
    }

    public function edit(Slider $slider){
        return view('admin.slider.edit', compact('slider'));
    }

    public function store(Slider $slider, Request $request){
        // dd($request->all());
        $this->validate(
            $request,
            [
                'image' => 'required',
                'name'     => 'required',
                'active'         => 'required',
                

            ],
            [
                'require' => 'Trường này trống cmnr',
                'unique'  => 'Tên danh mục đã bị trùng'
            ]
        );
        $imageName = Null;
        if ($request->hasFile('image')) {
            $imageName = Str::uuid('image') . '.' . $request->image->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->image->move(public_path('media/slider'), $imageName); // di chuyển vào thư mục trên ổ cứng            
        } else {
            $imageName = 'noimage.png';
        }

        $slider = Slider::create([
            'name' => $request->name,
            'image' => asset('media/slider') . '/' . $imageName,
            'active' => $request->active
        ]);

        session()->flash('create_slider', 'success');
        return redirect('/admin/slider');
    }

    public function update(Slider $slider, Request $request){
        $imageName = Null;
        if ($request->hasFile('avatar')) {
            $imageName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/slider'), $imageName); // di chuyển vào thư mục trên ổ cứng
            $slider->update([
                'image' => asset('media/slider') . '/' . $imageName
            ]);
        }

        $slider->update([
            'name' => $request->name,
            'active' => $request->active
        ]);
        session()->flash('update_slider', 'success');
        return redirect('/admin/slider');
    }

    public function destroy(Slider $slider){
        $slider->delete();
        return response()->json([], 204);
    }
}
