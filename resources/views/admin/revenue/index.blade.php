@extends('admin.layout.main')
@section('title', 'Thống kê')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="container-fluid">
            <form action="/admin/revenue" method="get">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="from_date" class="form-control datepicker" placeholder="Chọn ngày bắt đầu" value="">
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="form-group">
                        <input type="text" name="to_date" class="form-control datepicker" placeholder="Chọn ngày kết thúc" value="">
                    </div>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-info" type="submit" id="btn-analytic" >Lấy</button>
                </div>
                <div class="col-md-1" style="padding-left: 0px">
                    <a href="/admin/analytic-pdf" class="btn btn-info" id="btn-analytics" >Xuất pdf</a>
                </div>
                <div class="col-md-4 card" style="margin-top: 0px; padding-bottom: 15px;">
                    <h3>Thống kê tổng thu nhập</h3>
                    <div class="row" style="padding-left: 15px" id="text_tong_nhap">
                        Tổng nhập: {{number_format($tong_nhap)}}đ
                    </div>
                    <div class="row" style="padding-left: 15px" id="text_tong_thu">
                        Tổng thu: {{number_format($tong_thu)}}đ
                    </div>
                    <div class="row" style="padding-left: 15px" id="text_loi_nhuan">
                        Tổng lợi nhuận: {{number_format($loi_nhuan)}}đ
                    </div>
                </div>
            </div>
            </form>
            <div class="row" style="background-color: white;">
                <div class="card-body table-hover">
                    <div class="table-responsive">
                        @if (isset($order))
                        <table class="table table-shopping" id="revenue_table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 116px;">Mã đơn hàng</th>
                                    <th class="text-left" style="width: 196px">Ảnh Sản Phẩm</th>
                                    <th style="width: 256px;">Tên sản Phẩm</th>
                                    <th class="th-description" style="width: 66px;">Màu sắc</th>
                                    <th class="text-center" style="width: 66px;">Size</th>
                                    <th class="th-description text-right" style="width: 86px;">Số lượng</th>
                                    <th class="text-center" style="width: 126px;">Đơn giá nhập</th>
                                    <th class="text-center" style="width: 126px;">Đơn giá bán</th>
                                    <th class="text-center" style="width: 126px;">Lợi nhuận</th>
                                    <th class="text-center" style="width: 163px;">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($order as $key => $item)
                                @foreach ($item->attr_order as $index => $product)
                                @php
                                    $variant = getVariant($product->color, $product->size, $product->product_id);
                                        $tong_nhap +=  $variant->price_origin * $product->quantity;
                                        $tong_thu  += $product->price * $product->quantity;
                                        $loi_nhuan = $tong_thu - $tong_nhap;
                                @endphp
                                <tr>
                                    <td class="text-center">{{$product->order->order_code}}</td>
                                    <td>
                                        <a href="/san-pham/{{$product->product->p_slug}}" target="_blank">
                                            <div class="img-container">
                                                <img src="{{$product->product->avatar }}"
                                                    title="{{$product->product->name}}">
                                            </div>
                                        </a>
                                    </td>
                                    <td class="td-name">
                                        <a href="/admin/order/{{$product->id}}/edit">{{$product->product->name}}</a>
                                    </td>
                                    <td>
                                        {{$product->color}}
                                    </td>
                                    <td class="text-center">
                                        {{$product->size}}
                                    </td>
                                    <td class="text-center">
                                        {{$product->quantity}}
                                    </td>
                                    <td class="td-number text-center">
                                        {{number_format($variant->price_origin)}}đ
                                    </td>
                                    <td class="td-number text-center">
                                        {{number_format($product->price)}}đ
                                    </td>
                                    <td class="td-number text-center">
                                        {{number_format(($product->price * $product->quantity) - ($variant->price_origin * $product->quantity))}}đ
                                    </td>
                                    <td class="text-center">
                                        {{date('d-m-Y' ,strtotime($item->day_created))}}
                                    </td>
                                </tr>
                                @endforeach
                                @empty
                                <tr>
                                    <label for="" class="btn-waring">Không có sản phẩm nào</label>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD',
        });

        $('#revenue_table').DataTable({
            "order": [[ 9, "desc" ]]
        });

        $('#btn-analytics').click(function (){
            toastr.info('Đang xử lý. Vui lòng đợi trong giây lát!');
        });
    });
  </script>
@endpush