<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .table {
        table-layout: fixed;
    }
</style>
<div class="col-md-12">
    <div style="margin-bottom: 20px">
            <img class="img-fluid" style="width: 200px;margin-left: 400px;"
                src="{{asset ('manage/img/admin-ajax-1.png')}}" alt="">
    </div>
    <p></p>
    <h2 class="card-title text-center">Thống kê doanh thu sản phẩm</h2>
    @if ($from_date != null && $to_date != null)
        <i style="display: block; font-size:20px; margin-left: 20px; float:left;" class="card-title text-left">Ngày bắt đầu {{date('d-m-Y' ,strtotime($from_date))}} </i>
        <i style="display: block; font-size:20px; margin-right:20px;" class="card-title text-right">Ngày kết thúc {{date('d-m-Y' ,strtotime($to_date))}}</i>
    @else
    <i style="display: block" class="card-title text-center">Ngày {{ date("d") }} Tháng {{ date("m") }}
        Năm {{ date("Y") }}</i>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" style="width: 15%;">Mã đơn hàng</th>
                <th style="width: 20%;" class="text-left">Ảnh Sản Phẩm</th>
                <th style="width: 25%;">Tên sản phẩm</th>
                <th style="width: 10%;">Size</th>
                <th style="width: 10%;">Màu sắc</th>
                <th style="width: 10%;">Số lượng</th>
                <th style="width: 20%;" class="text-center">Đơn giá nhập</th>
                <th style="width: 20%;" class="text-center">Đơn giá bán</th>
                <th style="width: 20%;" class="text-center">Lợi nhuận</th>
                <th style="width: 20%;" class="text-center">Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($order as $key => $item)
            @foreach ($item->attr_order as $index => $product)
            @php
            $variant = getVariant($product->color, $product->size, $product->product_id);
            @endphp
            <tr>
                <td class="text-center">{{$product->order->order_code}}</td>
                <td>
                    <img style="width: 40%;" src="{{$product->product->avatar }}" title="{{$product->product->name}}">
                </td>
                <td class="td-name">
                    <b href="/admin/order/{{$product->id}}/edit">{{$product->product->name}}</b>
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
    <div class="text-right" style="margin-right: 35px;">
        <b style="font-size: 30px;">Tổng nhập: {{number_format($tong_nhap)}}đ</b>
        <br>
        <b style="font-size: 30px;">Tổng thu: {{number_format($tong_thu)}}đ</b>
        <br>
        <b style="font-size: 30px;">Tổng lợi nhuận: {{number_format($loi_nhuan)}}đ</b>
    </div>
</div>