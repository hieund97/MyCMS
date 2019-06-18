<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Blog_Category;
use App\Models\User;
use App\Http\Controllers\Controller;

class Blog_CategoryController extends Controller
{
    public function index(){
        $categories = Blog_Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create(){
        $users = User::get();
        return view('admin.category.create', compact('users'));
    }

    public function store(Blog_Category $blog_category, Request $request){
        $blog_category = Blog_Category::create([
            'category' => $request->category,
            'author' => $request->author
        ]);
        session()->flash('create_category', 'success');
        return redirect('/admin/blog-category');
    }
}
