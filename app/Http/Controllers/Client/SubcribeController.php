<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcribe;

class SubcribeController extends Controller
{
    public function store(Subcribe $subcribe, Request $request){
        $this->validate(
            $request,
            [
                'email' => 'required | unique:subcribe,email'               
                
            ],
            [
                'require' => 'Trường này trống cmnr',  
                'unique'  => 'Tên danh mục đã bị trùng'
            ]
        );

        $subcribe = Subcribe::create([
            'email' => $request->email
        ]);
        return redirect('/')->with('subcribed', 'success');
    }
}
