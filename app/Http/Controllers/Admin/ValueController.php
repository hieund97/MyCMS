<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Value;
use App\Models\Attribute;

class ValueController extends Controller
{
    public function store(Value $value, Request $request){
        $this->validate(
            $request,
            [
                'attr' => 'required'
            ],
            [
                'require' => 'Trường này trống cmnr',                
            ]
        );
        $value = Value::create([
            'attr_id' => $request->attr,
            'value' => $request->value
        ]);
        session()->flash('create_value', 'success');
        return redirect('/admin/products/value');
    }

    public function edit(Value $value){
        $attribute = Attribute::all();
        return view('admin.value.edit', compact('value', 'attribute'));
    }

    public function update(Value $value, Request $request){
        $value ->update([
            'attr_id' => $request->attr,
            'value' => $request->value
        ]);
        session()->flash('update_value', 'success');
        return redirect('/admin/products/value');
    }

    public function destroy(Value $value){
        $value->delete();
        return response()->json([], 204);
    }
}
