<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Email_Template;

class EmailController extends Controller
{
    public function list(){
        $list_template = Email_Template::latest()->get();
        return view('admin.mail-template.list', compact('list_template'));
    }

    public function edit($id){
        $list_template = Email_Template::find($id);
        return view('admin.mail-template.edit', compact('list_template'));
    }

    public function create(){
        return view('admin.mail-template.create');
    }

    public function store(Request $request){
        $this->validate(
            $request,
            [
                'name'         => 'required',
                'subject' => 'required',
                'template'        => 'required',
                'category'  => 'required',
            ],
            [
                'name.required'             => 'Tên email không được để trống',
                'subject.required'          => 'Tiêu đề Email không được để trống',
                'template.required'           => 'Nội dung email không được trùng',
                'category.required'           => 'Chủ đề email không được trùng',
            ]
        );

        $list_template = Email_Template::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'template' => $request->template,
            'category' => $request->category
        ]);

        session()->flash('create_email', 'success');
        return redirect('/admin/email-template');
    }

    public function update(Request $request, $id){
        $this->validate(
            $request,
            [
                'name'         => 'required',
                'subject' => 'required',
                'template'        => 'required',
                'category'  => 'required',
            ],
            [
                'name.required'             => 'Tên email không được để trống',
                'subject.required'          => 'Tiêu đề Email không được để trống',
                'template.required'           => 'Nội dung email không được trùng',
                'category.required'           => 'Chủ đề email không được trùng',
            ]
        );

        $list_template = Email_Template::find($id);

        $list_template->update([
            'name' => $request->name,
            'subject' => $request->subject,
            'template' => $request->template,
            'category' => $request->category
        ]);

        session()->flash('create_email', 'success');
        return redirect('/admin/email-template');
    }

    public function destroy($id){
        $list_template = Email_Template::find($id);
        $list_template->delete();
        return response()->json([], 204);
    }
}
