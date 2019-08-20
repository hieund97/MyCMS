<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Blog_Category;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class Blog_CategoryController extends Controller
{
    public function index(){
        $blog_categories = Blog_Category::all();
        return view('admin.blog_category.index', compact('blog_categories'));
    }

    // public function create(){
    //     $users = User::get();
    //     return view('admin.blog_category.create', compact('users'));
    // }

    public function store(Blog_Category $blog_category, Request $request){
        $this->validate(
            $request,
            [
                'category' => 'required | unique:blog_category,name'               
                
            ],
            [
                'require' => 'Trường này trống cmnr',  
                'unique'  => 'Tên danh mục đã bị trùng'
            ]
        );

        $slug = str_slug($request->category, '-');
        if (isset($slug)) {
            while (Blog_Category::where('b_cate_slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-'.rand(2, 9);
            }
        }

        $blog_category = Blog_Category::create([
            'name' => $request->category,
            'short_decription' => $request->short_decription,
            'b_cate_slug' => $slug
        ]);
        session()->flash('create_blog_category', 'success');
        return redirect('/admin/blog-category');
    }

    public function edit(Blog_Category $blog_category){
        return view('admin.blog_category.edit', compact('blog_category'));
    }

    public function update(Blog_Category $blog_category, Request $request){
       
        $blog_category->update([
            'name' => $request->category,
            'short_decription' => $request->short_decription,
            'b_cate_slug' => str_slug($request->category, '-')
        ]);
        session()->flash('update_blog_category', 'success');
        return redirect('/admin/blog-category/');
    }

    public function destroy(Blog_Category $blog_category){
        $blog_category->delete();
        return response()->json([], 204);
    }
}
