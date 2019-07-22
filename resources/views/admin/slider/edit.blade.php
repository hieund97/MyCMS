@extends("admin.layout.main")
@section("title", "Category")
@section("content")
<div class="col-md-6 ml-auto mr-auto">
    <div class="card">
        <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Sửa Ảnh</h4>
        </div>
        <div class="card-body">

            {{-- form --}}
            <form action="/admin/slider/{{$slider->id}}/edit" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <label class="bmd-label-floating">
                            <h4>Tên ảnh</h4>
                        </label>
                        <div class="form-group">
                            <input type="text" style="" name="name" class="form-control" required
                                value="{{$slider->name}}">

                        </div>
                    </div>
                </div>
                @if ($errors->has("category"))
                <div class="alert alert-danger">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>LỖI</b> ẢNH BỊ TRÙNG
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <label class="bmd-label-floating"
                            style="padding-left: 15px; padding-right: 30px;padding-top: 15px;">
                            <h4>Active</h4>
                            <span>Ảnh chọn active sẽ xuất hiện trên trang chủ (tối đa 5 Ảnh)</span>
                        </label>
                        <div class="form-group">
                            <select class="selectpicker" name="active" data-size="7"
                                data-style="btn btn-primary btn-round" title="Active" required>
                                <option {{$slider->active == 0? 'Selected':''}} value="0">Normal</option>
                                <option {{$slider->active == 1? 'Selected':''}} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 padding">
                        <label class="bmd-label-floating">
                            <h4>Ảnh</h4>
                        </label>
                        <div class="card card-profile" style="margin-top: 0px;">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                    <img src="{{$slider->image}}">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-rose pull-right">Sửa ảnh</button>
                <div class="clearfix"></div>
            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
@endsection