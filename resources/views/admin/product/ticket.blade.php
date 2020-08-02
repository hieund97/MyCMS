@extends('admin.layout.main')
@section('title', 'Ticket')
@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-8">
                        <h2 class="card-title">Phiếu nhập sản phẩm</h2>
                    </div>
                    <div class="col-md-2">
                        <form action="/admin/products/ticket-product" method="get">
                        <div class="form-group">
                            <input type="text" name="date" id="date" class="form-control datepicker" placeholder="Chọn ngày lấy phiếu" value="{{old('date')}}">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-info" id="btn-get" type="submit" >Lấy</button>
                    </div>
                    <div class="col-md-1" style="padding-left: 0px">
                        <a href="/admin/ticket-pdf" class="btn btn-info" id="btn-pdf">Xuất PDF</a>
                    </div>
                </form>
                </div>
            </div>
            <div class="card-body table-hover">
                <div class="table-responsive">
                    <table class="table table-shopping" id="ticket-table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 56px;">ID</th>
                                <th class="text-left" style="width: 196px">Ảnh Sản Phẩm</th>
                                <th style="width: 250px;">Tên sản Phẩm</th>
                                <th style="width: 136px;">Mã sản phẩm</th>
                                <th>Chi tiết</th>
                                <th class="text-center" style="width: 163px;">Ngày tạo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listTicket as $product)
                            <tr>
                                <td class="text-center">{{$product->id}}</td>
                                <td>
                                    <a href="/san-pham/{{$product->p_slug}}" target="_blank">
                                        <div class="img-container">
                                            <img src="{{ $product->avatar }}" title="{{$product->name}}">
                                        </div>
                                    </a>
                                </td>
                                <td class="td-name">
                                    <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                                    <br />
                                    <small>by {{$product->brand->name}}</small>
                                </td>
                                <td>
                                    {{$product->product_code}}
                                </td>
                                <td>
                                    @foreach ($product->variant as $variant)
                                    @foreach ($variant->value as $key => $value)
                                    {{$value->attribute->name}}: {{$value->value}} @if ($key % 2 == 0) - @endif @if ($key % 2 == 1) - Số lượng: {{ $variant->quantity }} - Giá nhập: {{ number_format($variant->price_origin) }} VNĐ - Giá bán: {{ number_format($variant->price) }} VNĐ <br> @endif 
                                    @endforeach
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    {{date('d-m-Y' ,strtotime($product->day_created))}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready( function () {
    var date = $('#date').val();
    $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY',
    });
    $('#ticket-table').DataTable({
        "order": [[ 1, "desc" ]]
    });

    $('#btn-get').click(function (){
        var date = $('#date').val();
        $('#btn-pdf').attr('href', '/admin/ticket-pdf?date=' + date);
    });

    $('#btn-pdf').click(function (){
        toastr.info('Đang xử lý');
    });

} );
</script>
@endpush