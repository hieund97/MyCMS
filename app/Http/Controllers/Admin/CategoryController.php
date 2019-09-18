<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        // $categories = Categories::all();        
        // $parentCate = Categories::where('parent_id', '=', 0)->get();
        return view('admin.categories.index');
    }    

    public function create(){
        // $categories = Categories::all();
        return view('admin.categories.create');
    }

    public function edit($id){
        // $categories = Categories::all();
        $data['category'] = Categories::find($id);
        return view('admin.categories.edit', $data);
    }

    public function store(Categories $categories, Request $request){
        // dd($request->all);
        $this->validate(
            $request,
            [
                'category' => 'required | unique:Categories,name'               
                
            ],
            [
                'require' => 'Trường này trống cmnr',  
                'unique'  => 'Tên danh mục đã bị trùng'
            ]
        );
        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng            
        } else {
            $avatarName = 'noimage.png';
        }
        $slug = str_slug($request->category, '-');
        if (isset($slug)) {
            while (Categories::where('p_cate_slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-'.rand(2, 9);
            }
        }

        $categories = Categories::create([
            'name' => $request->category,
            'parent_id' => $request->parent,            
            'p_cate_slug' => $slug,
            'active' => $request->active,
            'navactive' => $request->navactive,
            'avatar' => asset('media/avatar') . '/' . $avatarName
        ]);
        return redirect('/admin/categories/')->with('create_category', 'Category Created');
    }

    public function update(Request $request, $id){        
        // dd($request->all());
        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng
            $category = Categories::find($id);
            $category->update([
                'avatar' => asset('media/avatar') . '/' . $avatarName
            ]);
        }
        $category = Categories::find($id);
        $category->update([
            'name' => $request->category,
            'parent_id' => $request->parent,
            'active' => $request->active,
            'navactive' => $request->navactive,
            'p_cate_slug' => str_slug($request->category, '-')
        ]);
        return redirect('/admin/categories/')->with('update_category', 'Category Updated');
    }

    public function destroy(Categories $categories){
        $categories->delete();
        return response()->json([], 204);
    }
}
