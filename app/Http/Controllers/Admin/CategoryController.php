<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Categories::all();
        
        // $parentCate = Categories::where('parent_id', '=', 0)->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        $categories = Categories::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function edit($id){
        $categories = Categories::all();
        $data['category'] = Categories::find($id);
        return view('admin.categories.edit', $data, compact('categories'));
    }

    public function store(Categories $categories, Request $request){
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

        $categories = Categories::create([
            'name' => $request->category,
            'parent_id' => $request->parent
        ]);
        return redirect('/admin/categories/')->with('create_category', 'Category Created');
    }

    public function update(Categories $categories, Request $request, $id){
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
        // dd($request->all());
        $category = Categories::find($id);
        $category->update([
            'name' => $request->category,
            'parent_id' => $request->parent
        ]);
        return redirect('/admin/categories/')->with('update_category', 'Category Updated');
    }

    public function destroy(Categories $categories){
        $categories->delete();
        return response()->json([], 204);
    }
}
