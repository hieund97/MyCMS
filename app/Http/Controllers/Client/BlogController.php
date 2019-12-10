<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog_Category;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){
        $blog_categories = Blog_Category::get();
        $blogs = Blog::latest()->paginate(3); 
        $randomBlog = Blog::inRandomOrder()->paginate(3);       
        return view('client.blog.index', compact('blog_categories', 'blogs', 'randomBlog'));
    }

    public function category($b_cate_slug){
        $blog_categories = Blog_Category::where('b_cate_slug', $b_cate_slug)->firstOrFail();
        $b_cate = $blog_categories->blog()->paginate(3);
        
        return view('client.blog.category', compact('blog_categories', 'b_cate'));
    }

    public function articles($slug){        
        $blog = Blog::where('slug', $slug)->firstOrFail();      
        $randomBlog = Blog::inRandomOrder()->paginate(3); 
        return view('client.blog.article', compact('blog', 'randomBlog'));
    }
   
}
