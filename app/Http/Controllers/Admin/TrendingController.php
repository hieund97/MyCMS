<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Trending;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class TrendingController extends Controller
{
    public function index(){
        $trending = Trending::all();
        return view('admin.trending.index', compact('trending'));
    }

    public function create(){
        return view('admin.trending.create');
    }

    public function edit($id){
        $trend = Trending::find($id);
        // $test = $trending->name;
        // dd($test);
        return view('admin.trending.edit', compact('trend'));
    }

    public function store(Request $request){

        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng            
        } else {
            $avatarName = 'noimage.png';
        }

        $slug = str_slug($request->name, '-');
        if (isset($slug)) {
            while (Trending::where('slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-' . rand(2, 9);
            }
        }

        $trending = Trending::create([
            'name' => $request->name,
            'slug' => $slug,
            'avatar' => asset('media/avatar') . '/' . $avatarName,
            'active' => $request->active,
            'navactive' => $request->navactive
            
        ]);
        session()->flash('create_trending', 'success');
        return redirect('/admin/trending');
    }

    public function update(Request $request, $id){
        
        $avatarName = Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image') . '.' . $request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'), $avatarName); // di chuyển vào thư mục trên ổ cứng     
            $trend = Trending::find($id);
            $trend->update([
                'avatar' => asset('media/avatar') . '/' . $avatarName
            ]) ;
        }         

        $trend = Trending::find($id);
        $trend->update([
            'name' => $request->name,
            'slug' => str_slug($request->name, '-'),            
            'active' => $request->active,
            'navactive' => $request->navactive
            
        ]);
        session()->flash('update_trending', 'success');
        return redirect('/admin/trending');
    }
}
