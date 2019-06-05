<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.auth.register');
    }

    public function store(Request $request)
    {
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
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        session()->flash('add_user', 'success');
        return redirect('/admin/register');
    }
}
