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
                        <h4 class="card-title">Thêm chủ đề -
                            <small class="category">Làm cho bài viết của bạn đa dạng hơn</small>
                        </h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/blog-category" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên chủ đề</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="category" class="form-control" required>
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card card-profile">
                                    <label class="bmd-label-floating">
                                        <h4>Mô tả ngắn</h4>
                                    </label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <textarea class="form-control" name="short_decription"
                                                style="padding-left: 15px; padding-right: 15px;" required rows="8">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Tạo chủ đề</button>
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