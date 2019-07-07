<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog_Category;

class Blog_CategoryController extends Controller
{
    public function index($slug){
        $blog_category = Blog_Category::where('slug', $slug)->firstOrFail();
        $blog_categories = Blog_Category::get();
        return view('client.blog.category', compact('blog_category', 'blog_categories'));
    }
}
