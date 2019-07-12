<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Categories;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index(){
        // $category = Categories::where('parent_id', '=', 0)->get();
        $categories = Categories::all();
        $blogs = Blog::inRandomOrder()->paginate(3);
        return view('admin.dashboard.index', compact('categories', 'blogs'));
    }
}
