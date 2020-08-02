<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .table {
        table-layout: fixed;
    }
    #created {
        float: left;
        margin: 0 300px 0 0;
    }
    #manager {
        float: left;
        margin-right: 350px;
    }
    #admin {
        float: left;
    }
</style>
<div class="col-md-12">
    <div class="row" style="margin-bottom: 20px">
        <div class="col-md-3" style="margin: 0 auto">
            <img class="img-fluid" style="width: 200px;margin-left: 120px;"
                src="{{asset ('manage/img/admin-ajax-1.png')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="card-title text-center">Phiếu nhập sản phẩm</h2>
            <i style="display: block" class="card-title text-center">Ngày {{date('d' ,strtotime($now))}} Tháng {{date('m' ,strtotime($now))}} Năm {{date('Y' ,strtotime($now))}}</i>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" style="width: 4%;">ID</th>
                <th style="width: 20%;" class="text-left">Ảnh Sản Phẩm</th>
                <th style="width: 25%;">Tên sản Phẩm</th>
                <th style="width: 25%;">Mã sản phẩm</th>
                <th style="width: 50%;">Chi tiết</th>
                <th style="width: 20%;" class="text-center">Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listTicket as $product)
            <tr>
                <td class="text-center">{{$product->id}}</td>
                <td>
                    <img style="width: 40%;" src="{{ $product->avatar }}" title="{{$product->name}}">
                </td>
                <td>
                    <b>{{$product->name}}</b>
                    <br />
                    <small>by {{$product->brand->name}}</small>
                </td>
                <td>
                    {{$product->product_code}}
                </td>
                <td>
                    @foreach ($product->variant as $variant)
                    @foreach ($variant->value as $key => $value)
                    {{$value->attribute->name}}: {{$value->value}} @if ($key % 2 == 0) - @endif @if ($key % 2 == 1) - Số
                    lượng: {{ $variant->quantity }} - Giá nhập: {{ number_format($variant->price_origin) }} VNĐ - Giá
                    bán: {{ number_format($variant->price) }} VNĐ <br> @endif
                    @endforeach
                    @endforeach
                </td>
                <td class="text-center">
                    {{date('d-m-Y' ,strtotime($product->day_created))}}
                </td>
            </tr>
            @endforeach
    </table>
    
    <div id="created">
        <b>Người tạo phiếu</b>
        <br>
        <i>(Ký tên)</i>
    </div>
    <div id="manager">
        <b>Thủ kho</b>
        <br>
        <i>(Ký tên)</i>
    </div>
    <div id="admin">
        <b>Kế toán trưởng</b>
        <br>
        <i>(Ký tên)</i>
    </div>
</div>