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
        $blogs = Blog::paginate(3);
        $users = User::get();
        return view('client.blog.index', compact('blog_categories', 'blogs', 'users'));
    }

    public function articles($slug){
        
        // $slug = Blog::where('slug', $slug)->first();
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $users = User::get();
        return view('client.blog.article', compact('blog', 'users'));
    }
}
