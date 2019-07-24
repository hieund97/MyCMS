<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
   
    
    protected $redirectTo = '/';    

    
    public function logout(Request $request)
    {
        auth()->guard()->logout();

        session()->invalidate();

        return redirect()->intended();
    }
}
