@extends('admin.layout.main')
@section('title', 'Edit Blog-Category')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Sửa chủ đề</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/blog-category/{{$blog_category->id}}/edit" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên chủ đề</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="category" class="form-control"
                                            value="{{$blog_category->name}}" required>
                                        </<input>
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
                                            <textarea class="form-control" name="short_decription" required
                                                rows="8">{{$blog_category->short_decription}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Sửa chủ đề</button>
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