@extends('admin.layout.main')
@section('title', 'Create Blog')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Thêm Bài viết -
                            <small class="category">sáng tạo bài viết của bạn </small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h2>Tiêu đề</h2>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h2>Bài viết</h2>
                                    </label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <textarea class="form-control" id="editor1" required rows="25"></textarea>
                                            @include('ckfinder::setup')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Tạo bài viết</button>
                            <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-profile">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{asset ('manage/img/placeholder.jpg') }}">
                            {{-- <img src="{{$blog->thumbnail&&$blog->thumbnail!==''?$blog->thumbnail:asset ('manage/img/placeholder.jpg') }}">
                            --}}
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="..." />
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                <div class="card card-profile">
                    <div class="dropdown bootstrap-select" style="width: 240px;">
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round"
                            title="Single Select">
                            <option disabled selected>Chọn chủ đề</option>
                            <option value="2">Foobar</option>
                            <option value="3">Is great</option>
                            <option value="4">Is bum</option>
                            <option value="5">Is wow</option>
                            <option value="6">boom</option>
                        </select>
                    </div>
                </div>
                <div class="card card-profile">
                    <label class="bmd-label-floating">
                        <h4>Mô tả ngắn</h4>
                    </label>
                    <div class="form-group">
                        <div class="form-group">
                            <textarea class="form-control" style="padding-left: 15px; padding-right: 15px;" required rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@include('ckfinder::setup')
