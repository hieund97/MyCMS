@extends('admin.layout.main')
@section('title', 'Create-Category')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Thêm danh mục</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/categories/{{$category->id}}/edit" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên danh mục</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="category" class="form-control" required
                                            value="{{$category->name}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="bmd-label-floating"
                                        style="padding-left: 15px; padding-right: 30px;padding-top: 15px;">
                                        <h4>Danh mục cha</h4>
                                    </label>
                                    <select class="selectpicker" name="parent" data-size="7"
                                        data-style="btn btn-primary btn-round" title="Danh mục">
                                        <option {{$category->parent_id == 0? 'Selected': ''}} value="0">Danh mục gốc
                                        </option>
                                        {{editCategory($categories, 0, '', $category->parent_id)}}
                                    </select>
                                </div>

                                <div class="col-md-7">
                                    <label class="bmd-label-floating"
                                        style="padding-left: 15px; padding-right: 30px;padding-top: 15px;">
                                        <h4>Active</h4>
                                        <span>Danh mục chọn active sẽ xuất hiện trên trang chủ (tối đa 3 danh
                                            mục)</span>
                                    </label>
                                    <div class="form-group">
                                        <select class="selectpicker" name="active" data-size="7"
                                            data-style="btn btn-primary btn-round" title="Active">
                                            <option {{$category->active == 0? 'Selected':''}} value="0">Normal</option>
                                            <option {{$category->active == 1? 'Selected':''}} value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card card-profile">
                                    <label class="bmd-label-floating">
                                        <h4>Mô tả ngắn</h4>
                                    </label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="short_description" required
                                            rows="8">{{$category->short_description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating">
                                        <h4>Ảnh danh mục</h4>
                                    </label>
                                    <div class="card card-profile" style="width: 250px;margin-top: 0px;">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                <img src="{{$category->avatar}}">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="avatar" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Sửa danh mục</button>
                            <div class="clearfix"></div>
                        </form>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection