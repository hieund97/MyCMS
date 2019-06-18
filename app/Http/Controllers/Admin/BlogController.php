<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(Blog $blogs){
        $blog = Blog::paginate(5);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create(Blog $blogs){
        return view('admin.blog.create', compact('blogs'));
    }

    public function category(){
        return view('admin.blog.category');
    }

    public function store(Blog $blog, Request $request){
        $thumbName=Null;
        if ($request->hasFile('avatar')) {
            $thumbName = Str::uuid('image'). '.' .$request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->thumb->move(public_path('media/thumb'),$thumbName); // di chuyển vào thư mục trên ổ cứng
        }

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'thumbnail' => $request->thumb,
            'short_decription' => $request->short_decription,
        ]);

        session()->flash('create_blog', 'success');
        return redirect('/admin/blog');
    }
}
