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
                                        <input type="text" style="" name="category" class="form-control" required></<input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-header card-header-icon card-header-rose">
                                    <h4 class="card-title">Tác giả </h4>
                                </div>
                                <div class="dropdown bootstrap-select" style="width: 240px;">
                                    <select class="selectpicker" name="author" data-size="7"
                                        data-style="btn btn-primary btn-round" title="Single Select">
                                        <option disabled selected>Chọn tác giả</option>
                                        @foreach ($users as $user)
                                            <option>{{$user->last_name}} {{$user->first_name}}</option>
                                        @endforeach                                                        
                                    </select>
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