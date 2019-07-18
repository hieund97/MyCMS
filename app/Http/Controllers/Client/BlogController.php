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
        $blogs = Blog::inRandomOrder()->paginate(3);
        $users = User::get();
        $hots = Blog::where('category_id', '=', 2)->inRandomOrder()->paginate(3);
        return view('client.blog.index', compact('blog_categories', 'blogs', 'users','hots'));
    }

    public function articles($slug){        
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $hots = Blog::where('category_id', '=', 3)->inRandomOrder()->paginate(3);
        $users = User::get();
       
        return view('client.blog.article', compact('blog', 'users', 'hots'));
    }
   
}
