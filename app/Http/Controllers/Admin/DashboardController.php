<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attr_Order;
use App\Models\User;
use App\Models\Categories;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Subcribe;

class DashboardController extends Controller
{
    public function index(){
        $attr_order = Attr_Order::all();
        $blogs = Blog::inRandomOrder()->paginate(3);
        $product = Product::all();
        $blog = Blog::all();
        $sub = Subcribe::all();
        return view('admin.dashboard.index', compact('blogs', 'attr_order', 'product', 'blog', 'sub'));
    }
}
