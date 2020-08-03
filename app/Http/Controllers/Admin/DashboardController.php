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
        $product = Product::all();
        $blog = Blog::all();
        $sub = Subcribe::all();
        $bestSellerProduct = Product::orderBy('purchase', 'DESC')->paginate(5);
        $unsoldProduct = Product::orderBy('quantity', 'DESC')->where('purchase', 0)->paginate(5);
        return view('admin.dashboard.index', compact('attr_order', 'product', 'blog', 'sub', 'bestSellerProduct', 'unsoldProduct'));
    }
}
