@extends('admin.layout.main')
@section('title', 'Create-Category')
@section('content')
<div class="col-md-6 ml-auto mr-auto">
    <div class="card">
        <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Thêm danh mục</h4>
        </div>
        <div class="card-body">

            {{-- form --}}
            <form action="/admin/categories" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="bmd-label-floating">
                            <h4>Tên danh mục</h4>
                        </label>
                        <div class="form-group">
                            <input type="text" style="" name="category" class="form-control" required>
                            </ <input>
                        </div>
                    </div>
                </div>
                @if ($errors->has('category'))
                <div class="alert alert-danger">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>LỖI</b> DANH MỤC BỊ TRÙNG
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <label class="bmd-label-floating">
                            <h4>Danh mục cha</h4>
                            <span>Chọn danh mục cấp bậc cao hơn của danh mục hiện tại. Để trống nếu muốn tạo danh mục gốc</span>
                        </label>
                        <select class="selectpicker" data-size="10" name="parent" data-style="btn btn-primary btn-round"
                            title="Single Select">
                            <option selected value="0">Danh mục gốc</option>
                            {{getCategory($categories, 0, '')}}
                        </select>
                    </div>

                    
                    <div class="col-md-6">
                        <label class="bmd-label-floating">
                            <h4>Navbar Active</h4>
                            <span>Danh mục chọn Navbar active sẽ xuất hiện trên thanh navbar trên trang chủ (tối đa 4 danh mục)</span>
                        </label>
                        <div class="form-group">
                            <select class="selectpicker" name="navactive" data-size="7"
                                data-style="btn btn-primary btn-round" title="Active">
                                <option value="1">Active</option>
                                <option value="0">Normal</option>
                            </select>
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-9 padding">
                        <label class="bmd-label-floating">
                            <h4>Ảnh danh mục</h4>
                        </label>
                        <div class="card card-profile" style="margin-top: 0px;">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                    <img src="{{asset ('manage/img/placeholder.jpg') }}">
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

                <button type="submit" class="btn btn-rose pull-right">Tạo danh mục</button>
                <div class="clearfix"></div>
            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
@endsection