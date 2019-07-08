<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog_Category;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $blog_categories = Blog_Category::get();
        $hots = Blog::where('category_id', '=', 2)->inRandomOrder()->paginate(3);
        return view('client.home.index', compact('blog_categories', 'hots'));
    }

    public function contact(){
        return view('client.home.contact');
    }

    public function about(){
        return view('client.home.about');
    }
}
