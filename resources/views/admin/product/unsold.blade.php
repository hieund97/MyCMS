@extends('admin.layout.main')
@section('title', 'Ticket')
@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-11">
                        <h2 class="card-title">Phiếu nhập sản phẩm</h2>
                    </div>
                    <div class="col-md-1" style="padding-left: 0px">
                        <a href="/admin/unsold-pdf" class="btn btn-info" id="btn-pdf">Xuất PDF</a>
                    </div>
                    </form>
                </div>
            </div>
            <div class="card-body table-hover">
                <div class="table-responsive">
                    <table id="unsold_table" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                        width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th style="width: 86px;">Ảnh</th>
                                <th class="text-center">Số lượng đã bán</th>
                                <th class="text-center">Số lượng còn lại</th>
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
                                    <a href="/san-pham/{{$product->p_slug}}" target="_blank">
                                        <div class="img-container">
                                            <img src="{{ $product->avatar }}" title="{{$product->name}}">
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center">{{$item->purchase}}</td>
                                <td class="text-center">{{$item->quantity}}</td>
                                <td class="text-center">{{$item->created_at}}</td>
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
    $('#unsold_table').DataTable({
        "order": [[ 0, "desc" ]]
    });

    $('#btn-pdf').click(function (){
        toastr.info('Đang xử lý');
    });

} );
</script>
@endpush