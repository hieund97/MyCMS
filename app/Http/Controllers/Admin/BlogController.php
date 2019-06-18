<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog_Category;

class BlogController extends Controller
{
    public function index(Blog $blogs){
        $blogs = Blog::paginate(5);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create(Blog $blog){
        $categories = Blog_Category::get();
        $users = User::get();
        return view('admin.blog.create', compact('blog', 'users', 'categories'));
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
            'author' => $request->author,
            'thumbnail' => $request->thumb,
            'short_decription' => $request->short_decription,
        ]);

        session()->flash('create_blog', 'success');
        return redirect('/admin/blog');
    }
}
