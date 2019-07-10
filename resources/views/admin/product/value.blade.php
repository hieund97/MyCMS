@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<style type="text/css">
    .bor {
        border-right: solid 1px thistle;
    }
    
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thuộc tính sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 56px;">#</th>
                                        <th style="width: 216px;">Thuộc tính</th>
                                        <th>Giá trị</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attrs as $attr)
                                    <tr>
                                        <td class="text-center">{{$attr->id}}</td>
                                        <td class="td-actions bor">
                                            <label class="btn btn-primary btn-round btn-lg "
                                                style="margin-right: 10px;padding:10px;width: 100px;">{{$attr->name}}</label>
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round "
                                                data-original-title="Sửa">
                                                <a style="color:white;" href=""><i class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip"
                                                class="btn btn-danger btn-round btn-del " data-id=""
                                                data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>

                                        <td class="td-actions">
                                            @foreach ($attr->value as $value)
                                            <label class="btn btn-info btn-lg"
                                                style="margin-right: 10px;padding:10px; width:80px;  margin-bottom: 15px;">{{$value->value}}</label>
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round" style=" margin-bottom: 15px;"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href=""><i class="material-icons">edit</i></a>
                                            </button>
                                            <button style=" margin-right: 50px;  margin-bottom: 15px;" type="button" rel="tooltip"
                                                class="btn btn-danger btn-round btn-del" data-id=""
                                                data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                            @endforeach
                                        </td>


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thêm thuộc tính</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/categories" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên thuộc tính</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="category" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 1:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 2:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 3:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 4:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 5:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 6:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 7:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị 8:</h4>
                                <input type="text" style="" name="category" class="form-control">
                            </div>
                            <div style="margin-top: 30px;">
                                <button type="submit" class="btn btn-rose pull-right">Tạo thuộc tính</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection