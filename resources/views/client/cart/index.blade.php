@extends('client.layout.main')
@section('title', 'Giỏ hàng')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
@include('client.partial.header')
<div class="main main-raised">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top: 35px;">
            <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Tên sản phẩm</th>
                            <th class="th-description">Màu sắc</th>
                            <th class="th-description">Size</th>
                            <th class="text-right">Đơn giá</th>
                            <th class="text-right">Số lượng</th>
                            <th class="text-right">Thành tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (Cart::content() as $item)
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src=" {{$item->options->img}}" alt="...">
                                </div>
                            </td>
                            <td class="td-name text-primary">
                                {{$item->name}}

                            </td>
                            <td>
                                {{$item->options->color}}
                            </td>
                            <td>
                                {{$item->options->size}}
                            </td>
                            <td class="td-number">
                                <small></small>{{number_format($item->price)}} ₫
                            </td>
                            <td class="td-number">
                                <input type="number" value="{{$item->qty}}" min="1" max="99"
                                    style="width: 50px;padding-left: 10px;font-family: 'Pacifico', cursive;font-size: 16px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px;margin-right: 10px;">

                            </td>
                            <td class="td-number">
                                <small></small>{{number_format($item->price*$item->qty)}} ₫
                            </td>
                            <td class="td-actions">
                                <a href="/gio-hang/xoa-san-pham/{{$item->rowId}}" rel="tooltip"
                                    class="btn btn-danger btn-round btn-del" data-id="" data-original-title="Xóa">
                                    <i class="material-icons">close</i>
                                    </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                <p>Không có sản phẩm nào</p>
                            </td>
                            
                        </tr>
                        @endforelse
                        <tr>
                            <td colspan="3">
                                <a href="/san-pham" type="button" class="btn btn-warning btn-round"><i
                                        class="material-icons">keyboard_arrow_left</i>Tiếp tục mua sắm</a>
                            </td>
                            <td class="td-total">
                                Tạm tính
                            </td>
                            <td class="td-price">
                                <small></small>{{Cart::total(0,'',',')}} ₫
                            </td>
                            <td colspan="3" class="text-right"> <a href="/thanh-toan" class="btn btn-info btn-round">Đi
                                    đến thanh toán <i class="material-icons">keyboard_arrow_right</i></button></td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection