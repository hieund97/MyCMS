<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog_Category;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportBlog;
use App\Imports\ImportBlog;


class BlogController extends Controller
{
    public function index(Blog $blogs)
    {
        $blogs = Blog::all();
        // $blog_categories = Blog_Category::get();
        // $users = User::get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create(Blog $blog)
    {
        $blog_categories = Blog_Category::get();
        $adminUser = User::where('level', '=', 1)->get();
        return view('admin.blog.create', compact('blog', 'adminUser', 'blog_categories'));
    }

    public function edit(Blog $blog)
    {
        $blog_categories = Blog_Category::get();
        $users = User::get();
        return view('admin.blog.edit', compact('blog', 'users', 'blog_categories'));
    }

    public function store(Blog $blog, Request $request)
    {

        $this->validate(
            $request,
            [
                'category' => 'required',
                'author' => 'required',
            ],
            [
                'require' => 'Trường này trống cmnr',
            ]
        );

        $thumbName = Null;
        if ($request->hasFile('thumb')) {
            $thumbName = Str::uuid('image') . '.' . $request->thumb->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->thumb->move(public_path('media/thumb'), $thumbName); // di chuyển vào thư mục trên ổ cứng            
        } else {
            $thumbName = 'noimage.png';
        }
        $slug = str_slug($request->title, '-');
        if (isset($slug)) {
            while (Blog::where('slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-' . rand(2, 9);
            }
        }
        // dd($request->all());
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'user_id' => $request->author,
            'slug' => $slug,
            'thumbnail' => asset('media/thumb') . '/' . $thumbName,
            'short_decription' => $request->short_decription,
        ]);

        session()->flash('create_blog', 'success');
        return redirect('/admin/blog');
    }

    public function update(Blog $blog, Request $request)
    {
        if ($request->hasFile('thumb')) {
            $thumbName = Str::uuid('image') . '.' . $request->thumb->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->thumb->move(public_path('media/thumb'), $thumbName); // di chuyển vào thư mục trên ổ cứng
            $blog->update([
                'thumbnail' => asset('media/thumb') . '/' . $thumbName,
            ]);
        }

        // dd($request->all());
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category,
            'user_id' => $request->author,
            'short_decription' => $request->short_decription,
        ]);

        session()->flash('create_blog', 'success');
        return redirect('/admin/blog');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json([], 204);
    }

    // Import User from Excel
    public function import(Request $request)
    {
        $data = Excel::import(new ImportBlog,  $request->file('file'));
        session()->flash('import_user', 'success');
        return back();
    }

    // Export User to Excel
    public function export()
    {
        return Excel::download(new ExportBlog, 'blog.xlsx');
    }
}
