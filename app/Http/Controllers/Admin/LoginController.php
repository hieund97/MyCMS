<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    // protected $redirectTo = '/admin';

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'password' => 'required'
        ], [
            'email.email' => "Sai email rồi",
            'password.required' => 'Thiếu ô password rồi'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember') ? true : false)) {
            return redirect('/admin');
        };

        session()->flash('message', 'Sai thông tin đăng nhập');
        return redirect()->back();

        // return response()->json([], 204);
    }

    public function logout(Request $request)
    {
        auth()->guard()->logout();

        session()->invalidate();

        return redirect('/admin/login');
    }
}
