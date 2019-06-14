<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(User $user){
        $users = User::paginate(5);
        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user){
        return view('admin.user.edit', compact('user')) ;
    }

    public function create(User $user){
        return view('admin.user.create', compact('user'));
    }

    // Create User
    public function store(User $user, Request $request){     
        $this->validate(
            $request,
            [
                'email' => 'required',                
                'password' => 'min:8|required|required_with:retypepassword|same:retypepassword',
                'retypepassword' => 'min:8|required'
            ],
            [
                'require' => 'Trường này trống cmnr',                
            ]
        );        
        $avatarName=Null;
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image'). '.' .$request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'),$avatarName); // di chuyển vào thư mục trên ổ cứng
        }

        $user = User::create([
            'company' => $request->company,
            'user_name' => $request->username,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'about_me' => $request->aboutme,
            'avatar'=> asset('media/avatar').'/'.$avatarName,
            'password' => bcrypt($request->password),
            'level'=> $request->level
        ]);
        
        session()->flash('create_user', 'success');
        return redirect('/admin/user');
    }

    // Update User
    public function update(User $user, Request $request){
        if ($request->hasFile('avatar')) {
            $avatarName = Str::uuid('image'). '.' .$request->avatar->getClientOriginalExtension(); //getclient là hàm lấy đuôi ảnh, str::uuid hàm tạo ngẫu nhiên
            $request->avatar->move(public_path('media/avatar'),$avatarName); // di chuyển vào thư mục trên ổ cứng
            $user->update([
                'avatar' => asset('media/avatar').'/'.$avatarName
            ]);
        }
        $this->validate($request,
            [
                'email' => 'required',                
                'password' => 'min:8|required|required_with:retypepassword|same:retypepassword',
                'retypepassword' => 'min:8|required'
            ],
            [
                'require' => 'Trường này trống cmnr',                
            ]
        );
        $user->fill([
            'company' => $request->company,
            'user_name' => $request->username,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'about_me' => $request->aboutme,
            'password' => bcrypt($request->password),
            'level'=> $request->level
        ]);
        $user->save();
        session()->flash('update_user', 'success');
        return redirect('/admin/user/'.$user->id.'/edit');
    }  
    
}
