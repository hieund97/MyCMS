@extends('admin.layout.main')
@section('title', 'Create Blog')
@section('content')
<div class="content">
<form action="/admin/blog" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Thêm Bài viết -
                            <small class="category">sáng tạo bài viết của bạn </small>
                        </h4>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h2>Tiêu đề</h2>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="title" class="form-control" required></<input>
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
                                            <textarea class="form-control" name="content" id="editor1" required
                                                rows="30"></textarea>
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
                        <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                            {{-- <img src="{{asset ('manage/img/placeholder.jpg') }}"> --}}
                            <img
                                src="{{$blog->thumbnail&&$blog->thumbnail!==''?$blog->thumbnail:asset ('manage/img/placeholder.jpg') }}">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="thumb" />
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                <div class="card card-profile" style="height: 110px;">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title">Chủ đề </h4>
                    </div>
                    <div class="dropdown bootstrap-select" style="width: 240px;">
                        <select class="selectpicker" name="category" data-size="7"
                            data-style="btn btn-primary btn-round" title="Single Select">
                            <option disabled selected>Chọn chủ đề</option>
                            @if (isset($blog_categories))
                            @foreach ($blog_categories as $blog_category)
                            <option value="{{$blog_category->id}}">{{$blog_category->name}}</option>
                            @endforeach
                            @endif

                        </select>
                    </div>
                </div>
                <div class="card card-profile" style="height: 110px;">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title">Tác giả </h4>
                    </div>
                    <div class="dropdown bootstrap-select" style="width: 240px;">
                        <select class="selectpicker" name="author" data-size="7" data-style="btn btn-primary btn-round"
                            title="Single Select">
                            <option disabled selected>Chọn tác giả</option>
                            @if (isset($users))
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->last_name}} {{$user->first_name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="card card-profile">
                    <label class="bmd-label-floating">
                        <h4>Mô tả ngắn</h4>
                    </label>
                    <div class="form-group">
                        <div class="form-group">
                            <textarea class="form-control" name="short_decription"
                                style="padding-left: 15px; padding-right: 15px;" required rows="8"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection