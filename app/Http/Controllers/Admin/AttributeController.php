<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute;


class AttributeController extends Controller
{
    public function store(Attribute $attribute, Request $request){
        $this->validate(
            $request,
            [
                'attribute' => 'required | unique:attribute,name'
            ],
            [
                'require' => 'Trường này trống cmnr',                
            ]
        );
        // dd($request->all());
        $attribute = Attribute::create([
            'name' => $request->attribute
        ]);
        session()->flash('create_attribute', 'success');
        return redirect('/admin/products/value');
    }

    public function edit(Attribute $attribute){
        return view('admin.attribute.edit', compact('attribute'));
    }

    public function update(Attribute $attribute, Request $request){
        $attribute->update([
            'name' => $request->attribute
        ]);
        session()->flash('update_attribute', 'success');
        return redirect('/admin/products/value'); 
    }

    public function destroy(Attribute $attribute){
        $attribute->delete();
        return response()->json([], 204);
    }
}
