<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Value;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Brand;

class ProductController extends Controller
{

    // Product Zone
    public function index(Product $product)
    {
        $products = Product::paginate(5);
        // $categories = Categories::get();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Categories::get();
        $attribute = Attribute::all();

        return view('admin.product.create' ,compact('categories', 'attribute', 'brands'));
    }

    public function edit(Product $product){
        $categories = Categories::get();
        $attribute = Attribute::all();
        $brands = Brand::all();
        $data['category'] = Categories::find($product);

        return view('admin.product.edit', $data, compact('product','categories', 'attribute', 'brands'));
    }        

    public function store(Product $product, Request $request)
    {
        $this->validate(
            $request,
            [
                'product_code' => 'required | unique:product,product_code',
                'category'     => 'required',
                'attr'     => 'required'
                
            ],
            [
                'require' => 'Trường này trống cmnr',  
                'unique'  => 'Tên danh mục đã bị trùng'
            ]
        );
        // dd($request->all());

        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image'). '.' .$request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'),$avatarName); // di chuyển vào thư mục trên ổ cứng            
        }
        else {
            $avatarName = 'noimage.png';
        }

        $slug = str_slug($request->name, '-');
        if (isset($slug)) {
            while (Product::where('p_slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-'.rand(2, 9);
            }
        }

        $product = Product::create([
            'name' => $request->name,
            'product_code' => $request->product_code,
            'price' => Intval(str_replace(",","",$request->price)),
            'quantity' => $request->quantity,
            'description' => $request->description,
            'detail' => $request->detail,
            'brand_id' => $request->brand,
            'p_slug' => $slug,
            'highlight' => $request->highlight,
            'avatar' => asset('media/avatar').'/'.$avatarName
        ]);

        $cate_array = array();
        foreach ($request->category as $cate){            
                $cate_array[] = $cate;
            
        }
        $product->categories()->Attach($cate_array);

        $value_array = array();
        foreach ($request->attr as $value){
            foreach($value as $item){
                $value_array[] = $item;
            }
        }
        $product->value()->Attach($value_array);

        $variants = get_Combination($request->attr);

        foreach ($variants as $variant){
            $var = Variant::create([
                'product_id' => $product->id
            ]);
            $var->value()->Attach($variant);
        }

        session()->flash('create_product', 'success');
        return redirect('/admin/products/price/'.$product->id.'/edit');


    }

    public function destroy(Product $product){
        $product->delete();
        return response()->json([], 204);
    }


    // Value Zone
    public function value()
    {
        $attribute = Attribute::all();
        // $values = Value::all();
        return view('admin.product.value', compact('attribute'));
    }



    //Price Zone
    public function editprice(Product $product){
        return view('admin.product.editprice', compact('product'));
    }

    public function updateprice(Variant $variant, Request $request){
        // dd($request->all());
        foreach ($request->price as $key => $value) {
            $variant = Variant::find($key);
            $variant->update([
                'price' => Intval(str_replace(",","",$value)),
            ]);
        }

        session()->flash('edit_price', 'success');
        return redirect('/admin/products');
    }

    
    //Variant Zone
    public function destroyvariant(Variant $variant){
        $variant->delete();
        return response()->json([], 204);
    }



    // Brand Zone
    public function brand(Brand $brand){
        $brands = Brand::all();
        return view('admin.product.brand', compact('brands'));
    }
    
    public function addbrand(Brand $brand, Request $request){
        // dd($request->all());
        $this->validate(
            $request,
            [
                'brand' => 'required | unique:brand,name',
                
                
            ],
            [
                'require' => 'Trường này trống cmnr',  
                'unique'  => 'Tên danh mục đã bị trùng'
            ]
        );
        $brand = Brand::create([
            'name' => $request->brand
        ]);
        session()->flash('add_brand', 'success');
        return redirect('/admin/products/brand');
    }

    public function destroybrand(Brand $brand){
        $brand->delete();
        return response()->json([], 204);
    }

    public function editbrand(Brand $brand){
        return view('admin.product.editbrand', compact('brand'));
    }

    public function updatebrand(Brand $brand, Request $request){
        $brand->update([
            'name' => $request->brand
        ]);
        session()->flash('update_brand', 'success');
        return redirect('/admin/products/brand');
    }
}
