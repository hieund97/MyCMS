<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required',                
                'password' => 'min:8|required|required_with:retypepassword',
                'retypepassword' => 'min:8||same:password|required',
                'username' => 'required | unique:Users,user_name',
                'optionsCheckboxes' => 'required'
            ],
            [
                'require' => 'Trường này trống cmnr',                
            ]
        );
        $slug = str_slug($request->username, '-');
        if (isset($slug)) {
            while (User::where('slug', $slug)->get()->count() > 0) {
                $slug = $slug .= '-'.rand(2, 9);
            }
        }
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'user_name' => $request->username,
            'slug' => $slug,
            'password' => bcrypt($request->password)
        ]);
        session()->flash('add_user', 'success');
        return redirect('/');
    }
}
