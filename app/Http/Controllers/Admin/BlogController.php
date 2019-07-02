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
        $blogs = Blog::with('blog_category:id,name', 'users:id,first_name,last_name')->paginate(5);
        $blog_categories = Blog_Category::get();
        $users = User::get();
        return view('admin.blog.index', compact('blogs', 'users', 'blog_categories'));
    }

    public function create(Blog $blog){
        $blog_categories = Blog_Category::get();
        $users = User::get();
        return view('admin.blog.create', compact('blog', 'users', 'blog_categories'));
    }    

    public function edit(Blog $blog){
        $blog_categories = Blog_Category::get();
        $users = User::get();
        return view('admin.blog.edit', compact('blog', 'users', 'blog_categories'));
    }

    public function store(Blog $blog, Request $request){
        
        $thumbName=Null;
        if ($request->hasFile('thumb')) {
            $thumbName = Str::uuid('image'). '.' .$request->thumb->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->thumb->move(public_path('media/thumb'),$thumbName); // di chuyển vào thư mục trên ổ cứng
        }
        // dd($request->all());
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'user_id' => $request->author,
            'thumbnail' => asset('media/thumb').'/'.$thumbName,
            'short_decription' => $request->short_decription,
        ]);

        session()->flash('create_blog', 'success');
        return redirect('/admin/blog');
    }

    public function update(Blog $blog, Request $request){
        $thumbName=Null;
        if ($request->hasFile('thumb')) {
            $thumbName = Str::uuid('image'). '.' .$request->thumb->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->thumb->move(public_path('media/thumb'),$thumbName); // di chuyển vào thư mục trên ổ cứng
        }
        // dd($request->all());
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'user_id' => $request->author,
            'thumbnail' => asset('media/thumb').'/'.$thumbName,
            'short_decription' => $request->short_decription,
        ]);

        session()->flash('create_blog', 'success');
        return redirect('/admin/blog');
    }
    
}
