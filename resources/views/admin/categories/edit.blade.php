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
                        <form action="/admin/categories/{{$category->id}}/edit" method="POST" enctype="multipart/form-data">
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
                                <label class="bmd-label-floating"
                                    style="padding-left: 15px; padding-right: 30px;padding-top: 15px;">
                                    <h4>Danh mục cha</h4>
                                </label>
                                <select class="selectpicker" name="parent" data-size="7"
                                    data-style="btn btn-primary btn-round" title="Danh mục">
                                    <option value="0">Danh mục gốc</option>
                                    {{editCategory($categories, 0, '', $category->parent_id)}}
                                </select>

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