<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Value;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categories::get();
        return view('admin.product.index', compact('categories', 'parentCate'));
    }

    public function create()
    {
        $categories = Categories::get();
        $attribute = Attribute::all();
        return view('admin.product.create', compact('categories', 'attribute'));
    }

    public function value()
    {
        $attribute = Attribute::all();
        // $values = Value::all();
        return view('admin.product.value', compact('attribute'));
    }

    public function price()
    {
        return view('admin.product.price');
    }

    public function store(Product $product, Request $request)
    {
        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng
            $user = Product::create([
                'avatar' => asset('media/avatar') . '/' . $avatarName,
            ]);
        }
        $slug = str_slug($request->name, '-');
        if (isset($slug)) {
            while (Product::where('slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-'.rand(2, 9);
            }
        }

        $product = Product::create([
            'name' => $request->name,
            'product_code' => $request->product_code,
            'price' => $request->price,
            'quatity' => $request->quantity,
            'decription' => $request->decription,
            'detail' => $request->detail,
            'status' => $request->status,
            'brand' => $request->brand,
            
        ]);

    }
}
