@extends('admin.layout.main')
@section('title', 'DashBoard')
@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Số đơn hàng</p>
                            <h3 class="card-title">{{$attr_order->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">account_circle</i>
                            </div>
                            <p class="card-category">Số lượng User</p>
                            <h3 class="card-title">{{$users->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Số lượng sản phẩm hiện có</p>
                            <h3 class="card-title">{{$product->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">description</i>
                            </div>
                            <p class="card-category">Số lượng bài viết</p>
                            <h3 class="card-title">{{$blog->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Sản phẩm bán chạy nhất</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th style="width: 86px;">Ảnh</th>
                                            <th class="text-center">Số lượng đã bán</th>
                                            <th class="text-center">Kích cỡ</th>
                                            <th class="text-center">Màu sắc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bestSellerProduct as $item)
                                        @php
                                        $product = getInfoProduct($item->product_id);
                                        $data = getInfoProductFromVariant($item->id);
                                        @endphp
                                        <tr>
                                            <td class="td-name">
                                                <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                                                <br />
                                                <small>by {{$product->brand->name}}</small>
                                            </td>
                                            <td>
                                                <a href="/san-pham/{{$product->p_slug}}" target="_blank">
                                                    <div class="img-container">
                                                        <img src="{{ $product->avatar }}" title="{{$product->name}}">
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center">{{$item->purchase}}</td>
                                            @foreach ($data['value'] as $item)
                                            <td class="text-center">{{$item['value'] }}</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Sản phẩm tồn hàng nhiều nhất</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th style="width: 86px;">Ảnh</th>
                                            <th class="text-center">Số lượng đã bán</th>
                                            <th class="text-center">Số lượng còn lại</th>
                                            <th class="text-center">Kích cỡ</th>
                                            <th class="text-center">Màu sắc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($unsoldProduct as $item)
                                        @php
                                        $product = getInfoProduct($item->product_id);
                                        $data = getInfoProductFromVariant($item->id);
                                        @endphp
                                        <tr>
                                            <td class="td-name">
                                                <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                                                <br />
                                                <small>by {{$product->brand->name}}</small>
                                            </td>
                                            <td>
                                                <a href="/san-pham/{{$product->p_slug}}" target="_blank">
                                                    <div class="img-container">
                                                        <img src="{{ $product->avatar }}" title="{{$product->name}}">
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center">{{$item->purchase}}</td>
                                            <td class="text-center">{{$item->quantity}}</td>
                                            @foreach ($data['value'] as $item)
                                            <td class="text-center">{{$item['value'] }}</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-success" data-header-animation="true">
                    <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Doanh thu tuần này</h4>
                    <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in
                        today sales.</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Cập nhật 20p trước
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Doanh thu tháng này</h4>
                    <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in
                        today sales.</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Cập nhật 20p trước
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header card-header-info" data-header-animation="true">
                    <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Doanh thu năm nay</h4>
                    <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in
                        today sales.</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Cập nhật 20p trước
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</div>
@endsection