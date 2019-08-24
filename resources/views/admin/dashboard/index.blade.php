@extends('admin.layout.main')
@section('title', 'DashBoard')
@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
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
                                
                            </div>
                        </div>
                    </div>
                </div>

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
            </div>


            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6">
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
                <div class="col-lg-2 col-md-6 col-sm-6">
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
                <div class="col-lg-2 col-md-6 col-sm-6">
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
                <div class="col-lg-2 col-md-6 col-sm-6">
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
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">thumb_up</i>
                            </div>
                            <p class="card-category">Số lượng khách hàng đăng ký</p>
                        <h3 class="card-title">{{$sub->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">supervisor_account</i>
                            </div>
                            <p class="card-category">Số lượng người đang truy cập</p>
                            <h3 class="card-title">34,245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection