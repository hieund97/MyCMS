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
                        <form action="/admin/blog-category" method="POST" enctype="multipart/form-data">
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
                            <div class="row">
                                <label class="bmd-label-floating" style="padding-left: 15px; padding-right: 30px;padding-top: 15px;">
                                    <h4>Danh mục cha</h4>
                                </label>
                                
                                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round"
                                        title="Single Select">
                                        <option selected value="0">Danh mục gốc</option>
                                        <option value="2">Foobar</option>
                                        <option value="3">Is great</option>
                                        <option value="4">Is bum</option>
                                        <option value="5">Is wow</option>
                                        <option value="6">boom</option>
                                    </select>
                               
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Tạo danh mục</button>
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