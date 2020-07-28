@extends('client.layout.main')
@section('title', 'Hoàn tất thanh toán')
@section('content')
<style>
    .do-dai {
        width: 196px;
    }
</style>


@include('client.partial.header')

<div class="main main-raised">
    <div class="container-fluid" style="padding:30px;">
        <div class="row text-center">
            <div class="icon icon-success text-center">
                <i class="material-icons" style="font-size: 150px">done_outline</i>
            </div>
            <h3 class="text-success" style="font-weight: 500">Đặt hàng thành công. Cảm ơn bạn đã tin tưởng chọn sản phẩm
                của 360. Sự lựa chọn của bạn là niềm
                hạnh phục của chúng tôi</h3>
            <a href="/" type="button" class="btn btn-success btn-round">Trang chủ</a>
            <a href="/san-pham" type="button" class="btn btn-info btn-round">Tiếp tục mua sắm</a>
        </div>
        <div class="container" style="margin-top:50px ">
            <div class="col-md-6 col-sm-12 col-xs-12" style="border-right: 1px solid #C8C8C8">
                <h3 class="text-center">Thông tin đơn hàng
                </h3>
                <table class="table">
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>

                    </tbody>
                    <tr>
                        <td class="do-dai">
                            Mã đơn hàng
                        </td>
                        <td>
                            {{$orders->order_code}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Ngày mua
                        </td>
                        <td>
                            {{$orders->created_at}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Số sản phẩm
                        </td>
                        <td>
                            {{$orders->quantity}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Phí vận chuyển
                        </td>
                        <td>
                            {{number_format($orders->ship->price)}}đ
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Số tiền phải trả
                        </td>
                        <td>
                            {{number_format($orders->total_price) }}đ
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Phương thức thanh toán
                        </td>
                        <td>
                            {{$orders->pay->name}}
                        </td>
                    </tr>
                </table>
            </div>

            @auth
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3 class="text-center">Thông tin khách hàng</h3>
                <table class="table">
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>

                    </tbody>
                    <tr>
                        <td class="do-dai">
                            Họ và tên
                        </td>
                        <td>
                            {{auth()->user()->last_name}} {{auth()->user()->first_name}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Số điện thoại
                        </td>
                        <td>
                            {{auth()->user()->phone}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Địa chỉ nhận hàng
                        </td>
                        <td>
                            {{$orders->address}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Ghi chú
                        </td>
                        <td>
                            {{$orders->note == NULL ?'Không có chú thích': $orders->note}}
                        </td>
                    </tr>

                </table>
            </div>
            @endauth

            @guest
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3 class="text-center">Thông tin khách hàng
                </h3>
                <table class="table">
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>

                    </tbody>
                    <tr>
                        <td class="do-dai">
                            Họ và tên
                        </td>
                        <td>
                            {{$orders->guest->client_name}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Số điện thoại
                        </td>
                        <td>
                            {{$orders->guest->phone}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Địa chỉ nhận hàng
                        </td>
                        <td>
                            {{$orders->address}}
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Ghi chú
                        </td>
                        <td>
                            {{$orders->note == NULL ?'Không có chú thích': $orders->note}}
                        </td>
                    </tr>

                </table>
            </div>
            @endguest

        </div>
    </div>



</div>


@endsection


<script type="text/javascript">
    $().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKitDemo.initContactUsMap();
		});
</script>