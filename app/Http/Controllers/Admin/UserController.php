<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $user){
        return view('admin.user.index', compact('user')) ;
    }

    public function update(User $user, Request $request){
        $user->update([
            'user_name' => $request->username,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'postal_code' => $request->postalcode,
            'about_me' => $request->aboutme
        ]);
        session()->flash('update_user', 'success');

        return redirect('/admin/user'.$user->id.'');
    }
}
