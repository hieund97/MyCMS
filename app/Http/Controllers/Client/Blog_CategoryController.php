<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog_Category;

class Blog_CategoryController extends Controller
{
    // public function index($b_cate_slug){
    //     $blog_categories = Blog_Category::where('b_cate_slug', $b_cate_slug)->firstOrFail();        
    //     return view('client.blog.category', compact('blog_categories'));
    // }
}
