<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function detail($slug){
        $user = User::where('slug', $slug)->firstOrFail();
        return view('client.user.detail', compact('user'));
    }
}
