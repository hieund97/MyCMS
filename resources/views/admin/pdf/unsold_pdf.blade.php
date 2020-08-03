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
            <h2 class="card-title text-center">Danh sách hàng tồn kho</h2>
            <i style="display: block" class="card-title text-center">Ngày {{date('d' ,strtotime($now))}} Tháng {{date('m' ,strtotime($now))}} Năm {{date('Y' ,strtotime($now))}}</i>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 10%;">ID</th>
                <th style="width: 20%;">Tên</th>
                <th style="width: 20%;">Ảnh</th>
                <th style="width: 15%;"  class="text-center">Số lượng đã bán</th>
                <th style="width: 15%;" class="text-center">Số lượng còn lại</th>
                <th style="width: 10%;" class="text-center">Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unsoldProduct as $item)
            @php
            $product = getInfoProduct($item->product_id);
            @endphp
            <tr>
                <td>{{$product->id}}</td>
                <td class="td-name">
                    <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                    <br />
                    <small>by {{$product->brand->name}}</small>
                </td>
                <td>
                    <img style="width: 40%" src="{{ $product->avatar }}" title="{{$product->name}}">
                </td>
                <td class="text-center">{{$item->purchase}}</td>
                <td class="text-center">{{$item->quantity}}</td>
                <td class="text-center">{{$item->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>