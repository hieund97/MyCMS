@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">card_travel</i>
                </div>
                <h4 class="card-title">Danh sách sản phẩm</h4>
                <div style="float:right;">
                    <div id="datatables_filter" class="dataTables_filter">
                        <label>
                            <span class="bmd-form-group bmd-form-group-sm"><input type="search"
                                    class="form-control form-control-sm" placeholder="Search records"
                                    aria-controls="datatables"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-shopping">
                        <thead>
                            <tr>
                                <th class="text-left" style="padding-left: 20px; width: 228px">Ảnh Sản Phẩm</th>
                                <th style="padding-left: 20px; width: 328px;">Tên sản Phẩm</th>
                                <th class="text-center" style="width: 176px;">Danh mục</th>
                                <th class="th-description">Màu sắc</th>
                                <th class="th-description">Kích cỡ</th>
                                <th class="th-description" style="width: 116px;">Số lượng</th>
                                <th class="text-center" style="width: 136px;">Đơn giá</th>
                                <th class="text-center" style="width: 163px;">Tình trạng</th>
                                <th class="text-right" style="width: 116px;">Hành động</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="{{ asset('manage/img/product3.jpg') }}" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#nothing">Pencil Skirt</a>
                                    <br />
                                    <small>by Valentino</small>
                                </td>
                                <td class="td-number text-center">
                                   <a href="#"><b>Áo</b></a>
                                </td>
                                <td>
                                    White
                                </td>
                                <td>
                                    XL
                                </td>
                                <td>
                                    69
                                </td>
                                <td class="td-number text-center">
                                    <small>&euro;</small>799
                                </td>
                                <td class="td-number text-center">
                                    <label class="btn btn-danger" style="padding-left: 15px;padding-right: 15px;">Hết
                                        hàng</label>
                                </td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                        <a style="color:white;" href="#"><i class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="/admin/products/create" style="padding-left: 15px; padding-right: 15px;"
                    class="btn btn-primary pull-right">Thêm sản phẩm</a>
            </div>
        </div>
    </div>
</div>
@endsection