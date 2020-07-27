<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Brand;
use App\Models\Image_product;
use App\Models\Trending;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ProductController extends Controller
{

    // Product Zone
    public function index(Product $product)
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function store(Product $product, Request $request)
    {
        $this->validate(
            $request,
            [
                'name'         => 'required',
                'product_code' => 'required | unique:product,product_code',
                'price'        => 'required',
                // 'quantity'     => 'required',
                'category'     => 'required',
                'attr'         => 'required',
                'brand'        => 'required',
                'description'  => 'required',
                'avatar'       => 'required',
                'trend'        => 'required',
                'brand'        => 'required',
                'detail'       => 'required',
            ],
            [
                'name.required'                  => 'Tên sản phẩn không được để trống',
                'product_code.required'          => 'Mã sản phẩn không được để trống',
                'product_code.unique'            => 'Mã sản phẩn không được trùng',
                'price.required'                 => 'Giá sản phẩn không được để trống',
                // 'quantity.required'              => 'Số lượng sản phẩn không được để trống',
                'category.required'              => 'Danh mục sản phẩn không được để trống',
                'attr.required'                  => 'Thuộc tính sản phẩn không được để trống',
                'brand.required'                 => 'Thương hiệu sản phẩn không được để trống',
                'description.required'           => 'Mô tả sản phẩn không được để trống',
                'avatar.required'                => 'Ảnh sản phẩn không được để trống',
                'detail.required'                => 'Chi tiết sản phẩn không được để trống',
                'trend.required'                 => 'Xu hướng sản phẩn không được để trống',
            ]
        );

        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng
        } else {
            $avatarName = 'noimage.png';
        }

        $slug = str_slug($request->name, '-');
        if (isset($slug)) {
            while (Product::where('p_slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-' . rand(2, 9);
            }
        }

        $product = Product::create([
            'name' => $request->name,
            'product_code' => $request->product_code,
            'price' => Intval(str_replace(",", "", $request->price)),
            // 'quantity' => $request->quantity,
            'description' => $request->description,
            'detail' => $request->detail,
            'brand_id' => $request->brand,
            'p_slug' => $slug,
            'highlight' => $request->highlight,
            'trending_id' => $request->trend,
            'avatar' => asset('media/avatar') . '/' . $avatarName
        ]);

        // Add Category
        $cate_array = array();
        foreach ($request->category as $cate) {
            $cate_array[] = $cate;
        }
        $product->categories()->attach($cate_array);

        // Add Value
        $value_array = array();
        foreach ($request->attr as $value) {
            foreach ($value as $item) {
                $value_array[] = $item;
            }
        }
        $product->value()->Attach($value_array);


        // Add Variant
        $variants = get_Combination($request->attr);
        foreach ($variants as $variant) {
            $var = Variant::create([
                'product_id' => $product->id
            ]);
            $var->value()->attach($variant);
        }

        session()->flash('create_product', 'success');
        return redirect('/admin/products/image/' . $product->id . '/add');
    }

    public function update(Product $product, Request $request)
    {
        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng
            $product->update([
                'avatar' => asset('media/avatar') . '/' . $avatarName
            ]);
        }

        // $slug = str_slug($request->name, '-');
        // if (isset($slug)) {
        //     while (Product::where('p_slug', $slug)->get()->count() > 0) {
        //         $slug = $slug .= '-' . rand(2, 9);
        //     }
        // }

        $product->update([
            'name' => $request->name,
            'product_code' => $request->product_code,
            'price' => Intval(str_replace(",", "", $request->price)),
            // 'quantity' => $request->quantity,
            'description' => $request->description,
            'detail' => $request->detail,
            'brand_id' => $request->brand,
            'trending_id' => $request->trend,
            'highlight' => $request->highlight,
        ]);

        // Update value
        $cate_array = array();
        foreach ($request->category as $cate) {
            $cate_array[] = $cate;
        }
        $product->categories()->sync($cate_array);

        $value_array = array();
        foreach ($request->attr as $value) {
            foreach ($value as $item) {
                $value_array[] = $item;
            }
        }
        $product->value()->sync($value_array);

        // Update Variant
        $variants = get_Combination($request->attr);
        foreach ($variants as $variant) {
            if (check_variant($product, $variant)) {
                $var = Variant::create([
                    'product_id' => $product->id
                ]);
                $var->value()->attach($variant);
            }
        }

        session()->flash('update_product', 'success');
        return redirect('/admin/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([], 204);
    }


    // Value Zone
    public function value()
    {
        // $attribute = Attribute::all();
        // $values = Value::all();
        return view('admin.product.value');
    }



    //Price Zone
    public function editprice(Product $product)
    {
        return view('admin.product.editprice', compact('product'));
    }

    public function updateprice(Variant $variant, Product $product, Request $request)
    {
        $this->validate(
            $request,
            [
                'quantity.*'     => 'required|not_in:0',
                'price_origin.*' => 'required|not_in:0',
                
            ],
            [
                'quantity.*.not_in'     => 'Bạn chưa điền số lượng sản phẩm',
                'price_origin.*.not_in' => 'Bạn chưa điền giá nhập vào',
            ]
        );

        foreach ($request->price as $key => $value) {
            $variant = Variant::find($key);
            $variant->update([
                'price'        => Intval(str_replace(",", "", $value)),
                'price_origin' => Intval(str_replace(",", "", $request->price_origin[$key])),
                'quantity'     => $request->quantity[$key]
            ]);
        }

        session()->flash('edit_price', 'success');
        return redirect()->back();
    }


    //Variant Zone
    public function destroyvariant(Variant $variant)
    {
        $variant->delete();
        return response()->json([], 204);
    }



    // Brand Zone
    public function brand()
    {
        return view('admin.product.brand');
    }

    public function addbrand(Request $request)
    {
        $this->validate(
            $request,
            [
                'brand' => 'required | unique:brand,name'
            ],
            [
                'brand.required' => 'Tên thương hiệu không được để trống',
                'brand.unique'  => 'Tên thương hiệu không được trùng'
            ]
        );
        $slug = str_slug($request->brand, '-');
        if (isset($slug)) {
            while (Brand::where('slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-'.rand(2, 9);
            }
        }
        $brand = Brand::create([
            'name' => $request->brand,
            'slug'=> $slug
        ]);
        session()->flash('add_brand', 'success');
        return redirect('/admin/products/brand');
    }

    public function destroybrand(Brand $brand)
    {
        $brand->delete();
        return response()->json([], 204);
    }

    public function editbrand(Brand $brand)
    {
        return view('admin.product.editbrand', compact('brand'));
    }

    public function updatebrand(Brand $brand, Request $request)
    {
        $brand->update([
            'name' => $request->brand,
            'slug'=> str_slug($request->brand, '-'),
        ]);
        session()->flash('update_brand', 'success');
        return redirect('/admin/products/brand');
    }

    // image Zone
    public function image(Product $product)
    {
        return view('admin.product.addimage', compact('product'));
    }

    public function editimage(Product $product)
    {
        $image_product = Image_product::all();
        return view('admin.product.editimage', compact('product', 'image_product'));
    }

    public function updateimage(Product $product,  Request $request)
    {
        foreach ($request->avatar as $key => $image) {
            $avatarName = Null;
            if ($request->hasFile('avatar')) {
                $avatarName = Str::uuid('image') . '.' . $image->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
                $image->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng      
                $image_product = Image_product::find($key);
                $image_product->update([
                    'image' => asset ('media/avatar') . '/' . $avatarName
                ]);
            }
        }
        session()->flash('update_image', 'success');
        return redirect('/admin/products');
    }

    public function addimage(Image_product $image_product, Request $request){
        $this->validate(
            $request,
            [
                'avatar1' => 'required',
                'avatar2' => 'required',
                'avatar3' => 'required',
                'avatar4' => 'required'
            ],
            [
                'avatar1.require' => 'Ảnh không được phép để trống',
                'avatar2.require' => 'Ảnh không được phép để trống',
                'avatar3.require' => 'Ảnh không được phép để trống',
                'avatar4.require' => 'Ảnh không được phép để trống',
            ]
        );
        $avatarName1 = Null;
        if ($request->hasFile('avatar1')) {
            $avatarName1 = Str::uuid('image'). '.' .$request->avatar1->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar1->move(public_path('media/avatar'),$avatarName1); // di chuyển vào thư mục trên ổ cứng      
            $image_product = Image_product::create([
                'image' => asset('media/avatar').'/'.$avatarName1,
                'product_id' => $request->id
            ]);
        }

        $avatarName2 = Null;
        if ($request->hasFile('avatar2')) {
            $avatarName2 = Str::uuid('image'). '.' .$request->avatar2->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar2->move(public_path('media/avatar'),$avatarName2); // di chuyển vào thư mục trên ổ cứng      
            $image_product = Image_product::create([
                'image' => asset('media/avatar').'/'.$avatarName2,
                'product_id' => $request->id
            ]);
        }

        $avatarName3 = Null;
        if ($request->hasFile('avatar3')) {
            $avatarName3 = Str::uuid('image'). '.' .$request->avatar3->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar3->move(public_path('media/avatar'),$avatarName3); // di chuyển vào thư mục trên ổ cứng      
            $image_product = Image_product::create([
                'image' => asset('media/avatar').'/'.$avatarName3,
                'product_id' => $request->id
            ]);
        }

        $avatarName4 = Null;
        if ($request->hasFile('avatar4')) {
            $avatarName4 = Str::uuid('image'). '.' .$request->avatar4->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar4->move(public_path('media/avatar'),$avatarName4); // di chuyển vào thư mục trên ổ cứng      
            $image_product = Image_product::create([
                'image' => asset('media/avatar').'/'.$avatarName4,
                'product_id' => $request->id
            ]);
        }

        session()->flash('upload_image', 'success');
        return redirect('/admin/products/price/'.$request->id.'/edit');
    }

    public function updateStatusProduct(Request $request, $id){
        $product = Product::find($id);
        $product->update([
            'status' => $request->status
        ]);

        return response()->json([], 204);
    }

    public function updateStatusVariant(Request $request, $id){
        $variant = Variant::find($id);
        $variant->update([
            'status' => $request->status
        ]);

        return response()->json([], 204);
    }

    public function getTicketProduct(Request $request)
    {
        // dd($request->date);
        $now = Carbon::now()->format('Y-m-d');

        if(isset($request->date)){
            $now = date('Y-m-d',strtotime($request->date));
        }
        $listTicket = Product::where('day_created', $now)->get();
        return view('admin.product.ticket', compact('listTicket'));
    }
}
