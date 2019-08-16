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
                của Mr Spicy. Sự lựa chọn của bạn là niềm
                hạnh phục của chúng tôi</h3>
        </div>
        <div class="container" style="margin-top:50px ">
            <div class="col-md-6 col-sm-12 col-xs-12" style="border-right: 1px solid #C8C8C8">
                <h3>Thông tin đơn hàng
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
                            Đơn hàng số:
                        </td>
                        <td>
                            690009
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Ngày mua
                        </td>
                        <td>
                            Oct 03, 2017
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Tổng tiền
                        </td>
                        <td>
                            4.000.000₫
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Phương thức thanh toán
                        </td>
                        <td>
                            Thanh toán khi nhận hàng
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>Địa chỉ nhận hàng
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
                            Nguyễn Đức Hiếu
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Số điện thoại
                        </td>
                        <td>
                            0359717468
                        </td>
                    </tr>
                    <tr>
                        <td class="do-dai">
                            Địa chỉ nhận hàng
                        </td>
                        <td>
                           11/15 Ngõ Tô Tiền, Khâm Thiên, Đống Đa, Hà Nội
                        </td>
                    </tr>

                </table>
            </div>
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