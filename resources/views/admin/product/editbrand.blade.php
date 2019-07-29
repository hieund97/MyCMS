@extends('admin.layout.main')
@section('title', 'Edit Brand')
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
                        <h4 class="card-title">Sửa thương hiệu</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/products/brand/{{$brand->id}}/edit" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên thương hiệu</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="brand" class="form-control" required
                                            value="{{$brand->name}}">
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
                                    <b>LỖI</b> THƯƠNG HIỆU BỊ TRÙNG
                                </div>
                            </div>
                            @endif                            
                            <button type="submit" class="btn btn-rose pull-right">Sửa thương hiệu</button>
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