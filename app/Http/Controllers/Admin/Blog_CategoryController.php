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
        $blog_categories = Blog_Category::paginate(5);
        return view('admin.blog_category.index', compact('blog_categories'));
    }

    public function create(){
        $users = User::get();
        return view('admin.blog_category.create', compact('users'));
    }

    public function store(Blog_Category $blog_category, Request $request){
        $blog_category = Blog_Category::create([
            'name' => $request->category,
            'short_decription' => $request->short_decription
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
            'short_decription' => $request->short_decription
        ]);
        session()->flash('update_blog_category', 'success');
        return redirect('/admin/blog-category/');
    }

    public function destroy(Blog_Category $blog_category){
        $blog_category->delete();
        return response()->json([], 204);
    }
}
